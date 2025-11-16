<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WelcomeHead;

class WelcomeHeadController extends Controller
{
    public function index()
    {
        $welcome = WelcomeHead::first();
        return view('admin.welcome.index', compact('welcome'));
    }

    public function create()
    {
        return view('admin.welcome.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'text1' => 'required',
            'text2' => 'required',
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/welcome'), $imageName);

        WelcomeHead::create([
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'name' => $request->name,
            'position' => $request->position,
            'image' => 'uploads/welcome/' . $imageName,
        ]);

        return redirect()->route('admin.welcome.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function edit($id)
    {
        $welcome = WelcomeHead::findOrFail($id);
        return view('admin.welcome.edit', compact('welcome'));
    }

    public function update(Request $request, $id)
    {
        $welcome = WelcomeHead::findOrFail($id);

        $request->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'text1' => 'required',
            'text2' => 'required',
            'name' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/welcome'), $imageName);
            $welcome->image = 'uploads/welcome/' . $imageName;
        }

        $welcome->update([
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('admin.welcome.index')
            ->with('success', 'Data berhasil diperbarui!');
    }
}
