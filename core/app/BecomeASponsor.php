<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BecomeASponsor extends Model
{
    protected $table = 'become_a_sponsors'; // match your DB table name

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'linkedin',
        'sponsorship_level',
    ];
}
