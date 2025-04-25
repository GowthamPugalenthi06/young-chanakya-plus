<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class MentorChanakya extends Model
{
    protected $table = 'mentor_chanakya';
    protected $fillable = ['name', 'category', 'description', 'image', 'linkedin', 'facebook', 'twitter'];

}
