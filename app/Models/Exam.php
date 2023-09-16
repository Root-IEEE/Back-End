<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Exam extends Authenticatable
{
    use HasRoles;

    protected $table = 'exams';
    public $timestamps = true;
    protected $fillable = ['video_id', 'user_id', 'title', 'description'];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
