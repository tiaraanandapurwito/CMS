<?php

namespace App\Http\Controllers;

use App\Models\DeskripsiProfil;
use App\Models\MediaPartner;
use App\Models\Paket;
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
        $pakets=Paket::all();
        return view('company-profile.paket', compact('pakets'));
    }
}
