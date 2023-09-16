<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    protected $table = 'students_details';
    public $timestamps = true;
    protected $fillable = ['father_phone', 'mother_phone', 'class_name', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }}
