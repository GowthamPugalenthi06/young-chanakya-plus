<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BecomeAChanakya extends Model
{
    protected $table = 'become_a_chanakya';

    protected $fillable = [
        'name', 'email', 'phone', 'organisation', 'linkedin', 'interest','thoughts',
    ];
}