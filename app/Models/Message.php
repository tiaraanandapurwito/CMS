<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'messages';

    // Specify which fields can be mass-assigned
    protected $fillable = [
        'username',
        'email',
        'message',
    ];
}
