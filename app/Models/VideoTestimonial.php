<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
