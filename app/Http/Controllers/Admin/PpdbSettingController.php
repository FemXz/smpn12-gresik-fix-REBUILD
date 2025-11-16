<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PpdbSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PpdbSettingController extends Controller
{
    public function edit()
    {
        $setting = PpdbSetting::first();

        if (!$setting) {
            $setting = PpdbSetting::create([]);
        }

        return view('admin.ppdb.settings', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = PpdbSetting::first();

        $request->validate([
            'title' => 'nullable|string',
            'publish_date' => 'nullable|date',

            'poster' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'slider_1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'slider_2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'slider_3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        // ================================
        // UPDATE FIELD BIASA
        // ================================
        $setting->fill($request->except(['poster', 'slider_1', 'slider_2', 'slider_3']));

        // ================================
        // UPLOAD POSTER
        // ================================
        if ($request->hasFile('poster')) {

            if ($setting->poster) {
                Storage::disk('public')->delete($setting->poster);
            }

            $setting->poster = $request->file('poster')->store('ppdb/posters', 'public');
        }

        // ================================
        // UPLOAD SLIDER
        // ================================
        foreach (['slider_1', 'slider_2', 'slider_3'] as $slider) {

            if ($request->hasFile($slider)) {

                if ($setting->$slider) {
                    Storage::disk('public')->delete($setting->$slider);
                }

                $setting->$slider = $request->file($slider)->store('ppdb/sliders', 'public');
            }
        }

        // SIMPAN
        $setting->save();

        return back()->with('success', 'Pengaturan PPDB berhasil diperbarui!');
    }
}
