<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'username', 'email', 'phone', 'father_phone', 'mother_phone', 'is_active', 'image');
    protected $hidden = array('password');

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function results()
    {
        return $this->hasMany('App\Models\User');
    }

}