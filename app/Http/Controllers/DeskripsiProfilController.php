<?php

namespace App\Http\Controllers;

use App\Models\DeskripsiProfil;
use Illuminate\Http\Request;

class DeskripsiProfilController extends Controller
{
    // Menampilkan form dan data deskripsi
    public function index()
    {
        $descriptions = DeskripsiProfil::all();
        return view('deskripsi profil.index', compact('descriptions'));
    }

    public function create()
    {
        return view('deskripsi profil.create');
    }

    public function edit($id)
    {
        $deskripsiprofil = DeskripsiProfil::findOrFail($id);
        return view('deskripsi profil.edit', compact('deskripsiprofil'));
    }

    public function update(Request $request, $id)
    {
        $deskripsiprofil = DeskripsiProfil::findOrFail($id);

        $validatedata = $request->validate([
            'description' => 'required',
        ]);

        // Update the description
        $deskripsiprofil->update([
            'description' => $validatedata['description'],
        ]);

        return redirect()->route('deskripsi profil.deskripsi')->with('success', 'Deskripsi berhasil diupdate');
    }


    public function destroy(Request $request)
    {
        $descriptions = DeskripsiProfil::where('id', $request->id);
        $descriptions->delete();

        return redirect()->route('deskripsi profil.deskripsi')->with('success', 'Deskripsi berhasil dihapus');
    }


    // Menyimpan deskripsi baru
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        DeskripsiProfil::create([
            'description' => $request->description,
        ]);

        return redirect()->route('deskripsi profil.deskripsi')->with('success', 'Deskripsi berhasil ditambahkan');
    }

    public function tentangkami()
    {
        $descriptions = DeskripsiProfil::all();
        return view('company-profile.profil', compact('descriptions'));
    }
}
