<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersCreateRequest;
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
        return $request->all();


        User::create($request->all());

        return redirect('/admin/users');

        //return $request->all();

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
