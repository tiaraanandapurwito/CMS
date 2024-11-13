<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Store a new message
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'nullable|email',
            'message' => 'required|string|max:500',
        ]);

        Message::create([
            'username' => $request->username,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // Display messages for admin
    public function index()
    {
        $messages = Message::all();
        return view('contact pesan.index', compact('messages'));
    }
}

