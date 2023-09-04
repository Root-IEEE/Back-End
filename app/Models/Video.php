<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model 
{

    protected $table = 'videos';
    public $timestamps = true;
    protected $fillable = array('video', 'title', 'description');

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
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