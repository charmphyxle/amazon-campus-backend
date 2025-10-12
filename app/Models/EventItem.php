<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventItem extends Model
{
    protected $fillable = [
        'news_and_event_id',
        'time',
        'content',        
    ];

    public function newsAndEvent(): BelongsTo
    {
        return $this->belongsTo(NewsAndEvent::class);
    }

}
