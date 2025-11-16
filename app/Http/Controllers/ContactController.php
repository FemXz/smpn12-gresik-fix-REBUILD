<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        // Menampilkan halaman form
        return view('contact.index'); 
    }

    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'jenisPesan' => 'required',
            'nama'       => 'required',
            'email'      => 'required|email',
            'telepon'    => 'required',
            'subject'    => 'nullable',
            'isiPesan'   => 'required',
        ]);

        // Simpan ke database
        Contact::create([
            'jenisPesan' => $request->jenisPesan,
            'nama'       => $request->nama,
            'email'      => $request->email,
            'telepon'    => $request->telepon,
            'subject'    => $request->subject,
            'isiPesan'   => $request->isiPesan,
        ]);

        // Kembalikan respon ke user
        return back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
}
