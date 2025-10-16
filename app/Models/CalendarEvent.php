<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    /** @use HasFactory<\Database\Factories\CalendarEventFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'badge_title',
        'date',
        'start_time',
        'end_time',
        'description',
    ];
}
