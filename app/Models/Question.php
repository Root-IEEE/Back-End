<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model 
{

    protected $table = 'questions';
    public $timestamps = true;
    protected $fillable = array('exam_id', 'question');

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam', 'exam_id');
    }

    public function options()
    {
        return $this->hasMany('App\Models\Option');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

}