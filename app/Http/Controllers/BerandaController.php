<?php

namespace App\Http\Controllers;

use App\Models\DeskripsiProfil;
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
        $descriptions = DeskripsiProfil::all();
        return view('company-profile.profil', compact('descriptions'));
    }

    public function Paket()
    {
        return view('company-profile.paket');
    }
}
