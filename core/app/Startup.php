<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'full_name',
        'gender',
        'email',
        'password',
        'phone_number',
        'business_name',
        'industry',
        'role',
        'stage',
        'company_website',
        'business_address',
        'plan',         
        'type',    
        'payment_status',
    ];

    protected $hidden = [
        'password',
    ];
}
