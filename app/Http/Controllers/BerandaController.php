<?php

namespace App\Http\Controllers;

use App\Models\MediaPartner;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function Beranda()
    {
        $mediapartners=MediaPartner::all();
        return view('company-profile.beranda',compact('mediapartners'));
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
