<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function Beranda()
    {
        return view('company-profile.beranda');
    }

    public function Profil()
    {
        return view('company-profile.profil');
    }

    public function Paket()
    {
        return view('company-profile.paket');
    }
}
