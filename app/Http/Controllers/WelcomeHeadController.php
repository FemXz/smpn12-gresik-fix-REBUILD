<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeHead;
use Illuminate\Support\Facades\Storage;

class WelcomeHeadController extends Controller
{
    public function __construct()
    {
        // Hanya admin yang bisa akses edit/update
        $this->middleware('auth'); 
    }

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

        // validasi semua field + image opsional
        $request->validate([
            'subtitle' => 'required|string|max:255',
            'title'    => 'required|string|max:255',
            'text1'    => 'required|string',
            'text2'    => 'nullable|string',
            'name'     => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // update field
        $data->subtitle = $request->subtitle;
        $data->title    = $request->title;
        $data->text1    = $request->text1;
        $data->text2    = $request->text2;
        $data->name     = $request->name;
        $data->position = $request->position;

        // update image jika ada file baru
        if ($request->hasFile('image')) {
            // hapus file lama
            if ($data->image && Storage::disk('public')->exists($data->image)) {
                Storage::disk('public')->delete($data->image);
            }

            // simpan file baru
            $path = $request->file('image')->store('welcome', 'public');
            $data->image = $path;
        }

        $data->save();

        return back()->with('success', 'Berhasil diperbarui!');
    }
}
