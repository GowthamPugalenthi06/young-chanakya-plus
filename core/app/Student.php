<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'username',
        'password',
        'dob',
        'current_address',
        'linkedin',
        'university',
        'course',
        'plan',
        'type',
        'payment_status',
    ];

    protected $hidden = [
        'password',
    ];

}
