<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function eventItems():HasMany
    {
        return $this->hasMany(EventItem::class);
    }
}
