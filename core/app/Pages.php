<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pageses';
    protected $fillable = ['title', 'content'];
}
