<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table ='events';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'date',
        'enddate',
        'time',
        'endtime',
        'cost',
        'available_tickets',
        'venue',
        'meta_tags',
        'meta_description',
        'image',
        'lang_id',
        'cat_id',
    ];
    public function eventCategories(){
        return $this->belongsTo(EventCategory::class,'cat_id','id');
    }
}
