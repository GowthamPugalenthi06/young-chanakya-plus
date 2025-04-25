<?php
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepreneur extends Model
{
    use HasFactory;
    protected $table = 'entrepreneurs';

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone_number',
        'linkedin',
        'companyname',
        'position',
        'website',
        'industry',
        'annualrevenue',
        'noofemployees',
        'business',
        'plan',
        'type',
        'payment_status'
    ];

    protected $hidden = [
        'password',
    ];
}
