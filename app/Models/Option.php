<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model 
{

    protected $table = 'options';
    public $timestamps = true;
    protected $fillable = array('question_id', 'potion', 'status');

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

}