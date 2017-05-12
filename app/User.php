<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'photo_id', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // get all owner order by id descending
    public static function scopeLatest($query){

        return $query->orderBy('id', 'desc')->get();

    }

    //Tạo relationship với Role.
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
