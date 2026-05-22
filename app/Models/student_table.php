<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_table extends Model
{
    protected $table = 'student_table';
    protected $primaryKey = 'id';
    protected $fillable = [
        'stud_fname',
        'stud_lname',
        'stud_mname',
        'stud_email',
        'stud_age',
        'stud_address',
        'stud_dob'
    ];
}
