<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class Video extends Authenticatable
{
    use HasRoles;

    protected $fillable = ['video', 'user_id' ,'title', 'description'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function exam()
    {
        return $this->hasOne('App\Models\Exam');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
