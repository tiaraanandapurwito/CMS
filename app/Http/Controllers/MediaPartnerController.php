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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('mediapartners', 'public');
        }

        MediaPartner::create($data);

        return redirect()->route('mediapartners.index')->with('success', 'Media Partner created successfully.');
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

        return redirect()->route('mediapartners.index')->with('success', 'Media Partner updated successfully.');
    }

    /**
     * Remove the specified media partner from storage.
     */
    public function destroy(MediaPartner $mediapartner)
    {
        $mediapartner->delete();

        return redirect()->route('mediapartners.index')->with('success', 'Media Partner deleted successfully.');
    }
}
