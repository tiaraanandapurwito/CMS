<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('testimoni.index', compact('testimonis'));
    }

    public function create()
    {
        return view('testimoni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pekerjaan' => 'required|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        $data = $request->all();
        // $testimoni = new Testimoni();
        // $testimoni->nama = $request->nama;
        // $testimoni->pekerjaan = $request->pekerjaan;
        // $testimoni->pesan = $request->pesan;
        // $testimoni->rating = $request->rating;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('testimoni', 'public');
        }


        Testimoni::create($data);
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pekerjaan' => 'required|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->nama = $request->nama;
        $testimoni->pekerjaan = $request->pekerjaan;
        $testimoni->pesan = $request->pesan;
        $testimoni->rating = $request->rating;

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($testimoni->image) {
                Storage::disk('public')->delete($testimoni->image);
            }
            $filename = $request->image->store('testimoni', 'public');
            $testimoni->image = $filename;
        }

        $testimoni->save();
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        // Hapus foto jika ada
        if ($testimoni->image) {
            Storage::disk('public')->delete($testimoni->image);
        }
        $testimoni->delete();
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
