@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Manajemen User</h1>

    {{-- Tabs --}}
    <ul class="nav nav-tabs" id="userTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pending" type="button">
                Pending Users
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#active" type="button">
                Active Users
            </button>
        </li>
    </ul>

    <div class="tab-content mt-3">

        {{-- ===================== --}}
        {{-- PENDING USERS (USER) --}}
        {{-- ===================== --}}
        <div class="tab-pane fade show active" id="pending">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users->where('role','user')->where('status','pending') as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                {{-- Approve --}}
                                <form action="{{ route('admin.users.approve', $user->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    <button class="btn btn-success btn-sm">Approve</button>
                                </form>

                                {{-- Delete --}}
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus user ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada user pending</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- ===================== --}}
        {{-- ACTIVE USERS (ADMIN) --}}
        {{-- ===================== --}}
        <div class="tab-pane fade" id="active">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users->where('role','admin')->where('status','active') as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                {{-- Delete --}}
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus admin ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada admin aktif</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
