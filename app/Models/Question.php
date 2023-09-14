<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class Question extends Authenticatable
{
    use HasRoles;

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
