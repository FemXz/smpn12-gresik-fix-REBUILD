<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeHead;

class WelcomeHeadController extends Controller
{
    // tampilkan ke frontend
    public function show()
    {
        $data = WelcomeHead::first();
        return view('welcome-hero', compact('data'));
    }

    // halaman admin edit
    public function edit()
    {
        $data = WelcomeHead::first();
        return view('admin.welcome-hero-edit', compact('data'));
    }

    // proses update dari admin
    public function update(Request $request)
    {
        $data = WelcomeHead::first();

        $request->validate([
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->image->store('welcome', 'public');
            $data->image = $path;
        }

        $data->subtitle = $request->subtitle;
        $data->title    = $request->title;
        $data->text1    = $request->text1;
        $data->text2    = $request->text2;
        $data->name     = $request->name;
        $data->position = $request->position;

        $data->save();

        return back()->with('success', 'Berhasil diperbarui!');
    }
}
