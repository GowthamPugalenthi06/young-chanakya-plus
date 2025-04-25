<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    protected $table = 'mentor_homes';

    protected $fillable = [
        'name',
        'description',
        'image',
        'linkedin',
        'facebook',
        'twitter',
    ];
}
