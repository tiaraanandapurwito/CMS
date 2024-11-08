<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'latitude', 'longitude', 'status', 'color'];

    // Set default attributes
    protected $attributes = [
        'status' => 'inactive', // Set default status ke inactive
    ];
}
