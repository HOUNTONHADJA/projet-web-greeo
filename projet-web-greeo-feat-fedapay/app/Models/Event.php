<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'title', 
        'slug', 
        'date_event', 
        'location_name', 
        'address', 
        'meeting_link', 
        'image', 
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
