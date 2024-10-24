<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        return view('paket.index', compact('pakets'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
{
    $validated=$request->validate([
        'nama_paket' => 'required|string|max:255',
        'harga' => 'required|string|max:255',
        'deskripsi' => 'required|string',
    ]);

    $deskripsi = $request->deskripsi . " Kecepatan: " . $request->input('kecepatan') . " Mbps";

    Paket::create([
        'nama_paket' => $request->nama_paket,
        'harga' => $request->harga,
        'deskripsi' => $deskripsi,
    ]);

    return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan');
}
}
