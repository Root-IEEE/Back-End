<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model 
{

    protected $table = 'exams';
    public $timestamps = true;
    protected $fillable = array('video_id', 'admin_id', 'title', 'notes');

    public function video()
    {
        return $this->hasOne('App\Models\Video', 'video_id');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }

}