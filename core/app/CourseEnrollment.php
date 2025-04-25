<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseEnrollment extends Model
{
    protected $table = 'course_enrollments'; // Match your database table name

    protected $fillable = [
        'name',
        'email',
        'phone',
        'college',
        'linkedin',
        'course',
    ];
}