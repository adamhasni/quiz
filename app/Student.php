<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_name',
        'student_mykad',
        'student_gender'
        
    ];
    protected $primaryKey='student_id';
    protected $table = 'student';
    public $timestamps = false;
}
