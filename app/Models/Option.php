<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class Option extends Authenticatable
{
    use HasRoles;


    protected $table = 'options';
    public $timestamps = true;
    protected $fillable = array('question_id', 'body', 'status');

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

}
