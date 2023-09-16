<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable
{
    use HasRoles, HasApiTokens;


    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name','email', 'password' ,'phone', 'image');
    protected $hidden = array('password');

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function results()
    {
        return $this->hasMany('App\Models\User');
    }
    public function studentDetail()
    {
        return $this->hasOne('App\Models\StudentDetail', 'user_id');
    }

}
