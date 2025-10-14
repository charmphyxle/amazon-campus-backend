<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    /** @use HasFactory<\Database\Factories\VideoGalleryFactory> */
    use HasFactory;

    protected $fillable =[ 
        'url',
        'title',
        'description',
    ];
}
