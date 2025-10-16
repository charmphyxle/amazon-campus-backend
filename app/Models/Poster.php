<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Poster extends Model
{
    /** @use HasFactory<\Database\Factories\PosterFactory> */
    use HasFactory;

    protected $fillable = ['image'];

    public function getImageUrlAttribute()
    {
        return $this->image
            ? Storage::url('posters/' . $this->image)
            : null;
    }
}
