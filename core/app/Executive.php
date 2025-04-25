<?php
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    use HasFactory;
    protected $table = 'executives';
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone_number',
        'linkedin',
        'current_name',
        'designation',
        'industry',
        'year_of_experience',
        'company_linkedin',
        'company_website',
        'plan', 
        'type',            
        'payment_status',
    ];

    protected $hidden = [
        'password',
    ];
}
