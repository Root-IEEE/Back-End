<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use function Laravel\Prompts\password;

class Admin extends Model
{
    use hasRoles;

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('name', 'username', 'email', 'phone', 'image', 'is_active','password');
    protected $hidden = array('password');

    public function exams()
    {
        return $this->hasMany('App\Models\Exam');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
