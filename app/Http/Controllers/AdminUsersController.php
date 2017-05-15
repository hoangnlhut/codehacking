<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UsersCreateRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;


class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //hàm latest() được định nghĩa là hàm scopeLatest() ở model User
        $users = User::all()->load('role');

        return view('admin.user.index', ['users' => $users]);

    }

//    public function showUsers()
//    {
//        $users = DB::table('users')->select(['users.id', 'users.name', 'users.email', 'users.created_at', 'users.updated_at']);

//        $posts = DB::table('owners')
//            ->leftJoin('departments', 'owners.department_id', '=', 'departments.id')
//            ->leftJoin('users', 'owners.user_id', '=', 'users.id')
//            ->select(['departments.code', 'departments.full_code', 'departments.name AS department_name',
//                'users.name AS user_name', 'users.email', 'owners.user_raise_approval',
//                'owners.user_approved', 'owners.link', 'owners.established', 'owners.disbanded',
//                'owners.status']);
//
//        return Datatables::of($users)->make(true);
//            ->addColumn('action', function () {
//                return '<a href="#edit-" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> EDIT</a>';
//            })->make(true);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Get an array of roles
        $roles = Role::pluck('name', 'id');

        return view('admin.user.create', ['roles' => $roles]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersCreateRequest $request)
    {
        $input = $request->all();

//        dd($request->input('password'));

        //if you have a photo
        if($file = $request->file('photo_id'))
        {
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=> $name]);
            $input['photo_id'] = $photo->id;

        }

        $input['password'] = bcrypt($request->password);

        User::create($input);

        return redirect('/admin/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id');

//        dd($roles);

        return view('admin.user.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $input = $request->all();

        if(trim($request->password) == null || trim($request->password) == '')
        {
            $input['password'] = $user->password;
        }
        else
        {
            $input['password'] = bcrypt($request->password);
        }

        //if you have a photo
        if($file = $request->file('photo_id'))
        {
            if($user->photo_id == null)
            {
                $name = time() . $file->getClientOriginalName();

                $file->move('images', $name);

                $photo = Photo::create(['file'=> $name]);
                $request->photo_id = $photo->id;
            }
            else
            {
                $name = time() . $request->photo_id->getClientOriginalName();
                $file->move('images', $name);

                $photo = Photo::findOrFail($user->photo_id);
                $photo->file = $name;
                $request->photo_id = $photo->id;
                $photo->save();
            }

        }


        $user->update($input);

        return redirect('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
