<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

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

    public function getImageUrlAttribute()
    {
        return $this->image
            ? Storage::url('news-and-events/' . $this->image)
            : null;
    }

    public function eventItems(): HasMany
    {
        return $this->hasMany(EventItem::class);
    }
}
