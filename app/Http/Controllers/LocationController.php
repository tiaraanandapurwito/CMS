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
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'status' => 'required|in:active,inactive,maintenance',
            'color' => 'required|in:red,green,blue',
        ]);

        // Set default status to 'inactive' if status is not provided
        $validatedData['status'] = $validatedData['status'] ?? 'inactive';

        // Create a new location
        Location::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('maps.index')->with('success', 'Titik lokasi berhasil ditambahkan!');
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
            'status' => 'required|in:active,inactive,maintenance',
            'color' => 'required|in:red,green,blue',
        ]);

        $location = Location::findOrFail($id);
        $location->update($validatedData);

        return redirect()->route('maps.index')->with('success', 'Titik lokasi berhasil diupdate');
    }

    // Menghapus lokasi dari database
    public function destroy(int $id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect()->route('maps.index')->with('success', 'Titik lokasi berhasil dihapus');
    }
}
