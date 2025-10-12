<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsAndEvent extends Model
{
    protected $fillable = [
        'title',
        'badge_title',
        'short_description',
        'description',
        'start_date',
        'time',
        'location',
        'organizer',
        'contact',
        'phone',
        'image'
    ];
}
