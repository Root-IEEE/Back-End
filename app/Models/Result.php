<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model 
{

    protected $table = 'results';
    public $timestamps = true;
    protected $fillable = array('user_id', 'exam_id', 'question_id', 'option_id');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam', 'exam_id');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Question', 'question_id');
    }

    public function option()
    {
        return $this->belongsTo('App\Models\Option', 'option_id');
    }

}