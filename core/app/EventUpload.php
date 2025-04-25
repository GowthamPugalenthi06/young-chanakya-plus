<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventUpload extends Model
{
    use HasFactory;
    protected $table ='event_uploads';

    protected $fillable = [
        'title', 'slug', 'content', 'date', 'end_date', 'time', 'end_time',
        'cost', 'available_tickets', 'venue', 'meta_tags', 'meta_description',
        'image', 'lang_id', 'cat_id',
    ];
    public function eventCategories(){
        return $this->belongsTo(EventCategory::class,'cat_id','id');
    }
}
