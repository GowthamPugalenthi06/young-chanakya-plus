<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class MentorTeam extends Model
{
    protected $table = 'mentor_team';
    protected $fillable = ['name', 'category', 'description', 'image', 'linkedin', 'facebook', 'twitter'];

}
