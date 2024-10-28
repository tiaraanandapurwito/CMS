<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaPartner extends Model
{
    use HasFactory;
    protected $table = 'mediapartners';
    protected $fillable = [
        'mediapartner',
        'image',
    ];
}
