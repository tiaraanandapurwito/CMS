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
        'harga_paket' => 'required|string|max:255',
        'deskripsi_paket' => 'required|string',
        'warna_paket' => 'required|string',
    ]);

    $deskripsi = $request->deskripsi_paket . " Kecepatan: " . $request->input('kecepatan') . " Mbps";
    Paket::create([
        'nama_paket' => $request->nama_paket,
        'harga' => $request->harga_paket,
        'deskripsi' => $deskripsi,
        'warna_paket' => $request->warna_paket
    ]);

    return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan');
}
public function edit($id)
{
    $paket=Paket::find($id);
    return view('paket.edit', compact('paket'));
}

public function update(Request $request, $id)
{
    $paket=Paket::find($id);
    $request->validate([
        'nama_paket' => 'required|string|max:255',
        'harga' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'warna_paket' => 'required|string',
    ]);

    $paket->update([
        'nama_paket' => $request->nama_paket,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'warna_paket' => $request->warna_paket,
    ]);

    return redirect()->route('paket.index')->with('success', 'Paket berhasil diperbarui');
}

public function destroy($id)
{
    $paket = Paket::where('id', $id);
    $paket->delete();
    return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus');
   }

public function paket()
{
       $pakets= Paket::all();
       return view('company-profile.paket', compact('pakets'));
   }
}
