<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    // Menampilkan daftar lokasi
    public function index()
    {
        $locations = Location::all(); // Mengambil semua lokasi dari database
        return view('maps.index', compact('locations'));
    }

    // Menampilkan halaman form untuk menambah lokasi
    public function create()
    {
        return view('maps.create');
    }

    // Menyimpan data lokasi baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Membuat lokasi baru
        Location::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('maps.index')->with('success', 'Lokasi berhasil ditambahkan');
    }

    // Menampilkan halaman form untuk mengedit lokasi
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('maps.edit', compact('location'));
    }

    // Mengupdate data lokasi yang sudah ada
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $location = Location::findOrFail($id);
        $location->name = $request->input('name');
        $location->latitude = $request->input('latitude');
        $location->longitude = $request->input('longitude');
        $location->save();

        return redirect()->route('maps.index')->with('success', 'Lokasi berhasil diupdate');
    }


    // Menghapus lokasi dari database
    public function destroy(int $id)
    {
        $loc = Location::find($id);
        if(!$loc) return abort(404);
        // Menghapus lokasi
        $loc->delete();

        // Mengalihkan kembali dengan pesan sukses
        return redirect()->route('maps.index')->with('success', 'Lokasi berhasil dihapus.');
    }

}

