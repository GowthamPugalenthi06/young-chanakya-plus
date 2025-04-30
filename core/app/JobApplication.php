<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    // Define the table name (optional, if it differs from the plural of the model name)
    protected $table = 'job_applications';

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'email',
        'phone',
        'college',
        'qualification',
        'linkedin',
        'position',
    ];
}
