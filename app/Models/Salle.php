<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    //
    protected $fillable = [
        'name', 
        'description', 
        'capacity', 
        'location', 
        'price_per_hour', 
        'available', 
        'image', 
        'slug', 
    ];
}
