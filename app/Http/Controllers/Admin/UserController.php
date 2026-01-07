<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\AdminApproved;
use App\Notifications\UserDeleted;

class UserController extends Controller
{
    public function __construct()
    {
        // 🔒 USER MANAGEMENT HANYA SUPERADMIN
        $this->middleware('superadmin');
    }

    /**
     * Tampilkan user pending + admin aktif
     */
    public function index()
    {
        // Ambil user BIASA + ADMIN
        $users = User::whereIn('role', ['user', 'admin'])->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * APPROVE USER
     * user + pending -> admin + active
     * Kirim notifikasi email ke user
     */
    public function approve($id)
    {
        $user = User::findOrFail($id);

        // Kalau sudah admin & aktif, stop
        if ($user->role === 'admin' && $user->status === 'active') {
            return back()->with('info', 'User ini sudah menjadi admin.');
        }

        // Update status dan role
        $user->update([
            'status' => 'active',
            'role'   => 'admin',
        ]);

        // 🔔 Kirim notifikasi email
        $user->notify(new AdminApproved());

        return back()->with('success', 'User berhasil di-approve menjadi admin dan notifikasi dikirim.');
    }

    /**
     * Hapus user / admin (kecuali superadmin)
     * Kirim notifikasi email sebelum dihapus
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->role === 'superadmin') {
            return back()->with('error', 'Superadmin tidak bisa dihapus.');
        }

        // Ambil nama superadmin yang menghapus
        $deletedBy = auth()->user()->name ?? 'Superadmin';

        // 🔔 Kirim notifikasi ke user yang akan dihapus
        $user->notify(new UserDeleted($deletedBy));

        // Hapus user
        $user->delete();

        return back()->with('success', 'User berhasil dihapus dan notifikasi dikirim.');
    }
}
