<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    /** @use HasFactory<\Database\Factories\AccreditationFactory> */
    use HasFactory;

    protected $fillable =[
        'title',
        'badge_title',
        'image',
        'year',
        'description',
    ];
}
