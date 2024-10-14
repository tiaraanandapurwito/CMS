<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guarded = [];

    // If your admin users are stored in a custom table, specify it:
    protected $table = 'admins';
}
