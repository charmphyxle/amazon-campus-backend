<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class VideoTestimonial extends Model
{
    /** @use HasFactory<\Database\Factories\VideoTestimonialFactory> */
    use HasFactory;

    protected $fillable =[
        'video',
        'title',
        'name',
        'course',
    ];

    public function getVideoUrlAttribute()
    {
        return $this->video
            ? Storage::url('video-testimonials/' . $this->video)
            : null;
    }
}
