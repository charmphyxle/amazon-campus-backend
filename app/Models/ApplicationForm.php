<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationFormFactory> */
    use HasFactory, HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'date_of_birth',
        'nationality',
        'gender',
        'address',
        'emergency_contact_name',
        'emergency_contact_phone',
    ];

    protected function firstName(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => ucwords($value),
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => ucwords($value),
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => "{$this->first_name} {$this->last_name}",
        );
    }
}
