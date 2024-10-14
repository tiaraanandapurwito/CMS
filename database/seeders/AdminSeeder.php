<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin; // Ensure this matches your admin model

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Default Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Change this password as needed
        ]);
    }
}
