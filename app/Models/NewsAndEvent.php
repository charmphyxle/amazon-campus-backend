<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvent extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'badge_title',
        'short_description',
        'description',
        'start_date',
        'start_time',
        'end_time',
        'location',
        'organizer',
        'contact',
        'phone',
        'image'
    ];
}
