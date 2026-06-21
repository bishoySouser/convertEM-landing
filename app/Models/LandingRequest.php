<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingRequest extends Model
{
    protected $fillable = [
        'email',
    ];

    protected $casts = [
        'is_contacted' => 'boolean',
    ];
}
