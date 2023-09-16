<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    protected $table = 'results';
    public $timestamps = true;
    protected $fillable = array('user_id', 'exam_id', 'max_score', 'total_score');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam', 'exam_id');
    }

}
