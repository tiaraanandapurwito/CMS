<?php

namespace App\Http\Controllers;

use App\Models\MediaPartner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MediaPartnerController extends Controller
{
    public function index()
    {
        $mediapartners = MediaPartner::all();
        return view('mediapartners.index', compact('mediapartners'));
    }

    public function toggleStatus(MediaPartner $mediapartner)
{
    $mediapartner->is_active = !$mediapartner->is_active;
    $mediapartner->save();

    return back()->with('success', 'Good Job!');
}

    /**
     * Show the form for creating a new media partner.
     */
    public function create()
    {
        return view('mediapartners.create');
    }

    /**
     * Store a newly created media partner in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mediapartner' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi agar gambar wajib diisi dan berformat tertentu
        ]);

        // Proses penyimpanan jika validasi berhasil
        $mediapartner = new MediaPartner();
        $mediapartner->mediapartner = $request->mediapartner;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('mediapartners', 'public');
            $mediapartner->image = $imagePath;
        }

        $mediapartner->save();

        return redirect()->route('mediapartners.index')->with('success', 'Media Partner berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified media partner.
     */
    public function edit(MediaPartner $mediapartner)
    {
        return view('mediapartners.edit', compact('mediapartner'));
    }

    /**
     * Update the specified media partner in storage.
     */
    public function update(Request $request, MediaPartner $mediapartner)
    {
        $request->validate([
            'mediapartner' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($mediapartner->image) {
                Storage::disk('public')->delete($mediapartner->image);
            }

            $data['image'] = $request->file('image')->store('mediapartners', 'public');
        }

        $mediapartner->update($data);

        return redirect()->route('mediapartners.index')->with('success', 'Media Partner berhasil diupdate');
    }

    /**
     * Remove the specified media partner from storage.
     */
    public function destroy(MediaPartner $mediapartner)
    {
        $mediapartner->delete();

        return redirect()->route('mediapartners.index')->with('success', 'Media Partner berhasil dihapus');
    }
}
