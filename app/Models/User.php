<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable implements FilamentUser
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

    public function canAccessFilament(): bool
    {
        return $this->hasRole(['teacher_assistant', 'teacher', 'admin']);
    }


}
