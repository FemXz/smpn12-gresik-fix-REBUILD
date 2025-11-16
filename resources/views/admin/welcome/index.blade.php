@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Welcome Head</h1>

        @if (!$welcome)
            <a href="{{ route('admin.welcome.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Buat Data
            </a>
        @else
            <a href="{{ route('admin.welcome.edit', $welcome->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit Data
            </a>
        @endif
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">

            @if (!$welcome)
                <div class="text-center py-5">
                    <h5 class="text-muted">Belum ada data sambutan</h5>
                    <a href="{{ route('admin.welcome.create') }}" class="btn btn-primary mt-3">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
            @else
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($welcome->image) }}" class="img-fluid rounded shadow"
                             alt="Foto Kepala Sekolah">
                    </div>

                    <div class="col-md-8">
                        <h5 class="text-primary">{{ $welcome->subtitle }}</h5>
                        <h2>{{ $welcome->title }}</h2>

                        <p>{{ $welcome->text1 }}</p>
                        <p>{{ $welcome->text2 }}</p>

                        <hr>

                        <h4 class="mb-0">{{ $welcome->name }}</h4>
                        <small class="text-muted">{{ $welcome->position }}</small>
                    </div>
                </div>
            @endif

        </div>
    </div>

</div>
@endsection
