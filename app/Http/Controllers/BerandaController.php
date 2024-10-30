<?php

namespace App\Http\Controllers;

use App\Models\DeskripsiProfil;
use App\Models\Location;
use App\Models\MediaPartner;
use App\Models\Paket;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function Beranda()
    {
        $mediapartners=MediaPartner::where('is_active', true)->get();
        $locations = Location::all();
        return view('company-profile.beranda',compact('mediapartners', 'locations'));
    }

    public function Profil()
    {
        $descriptions = DeskripsiProfil::all();
        $testimonis = Testimoni::all();
        return view('company-profile.profil', compact('descriptions','testimonis'));
    }

    public function Paket()
    {
        $pakets=Paket::all();
        return view('company-profile.paket', compact('pakets'));
    }
}
