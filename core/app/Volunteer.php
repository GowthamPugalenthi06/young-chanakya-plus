<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'email',
        'password',
        'phone_number',
        'dob',
        'current_address',
        'linkedin',
        'plan',
        'type',
        'organization', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
}
