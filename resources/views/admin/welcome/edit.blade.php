@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Edit Sambutan Kepala Sekolah</h2>

    <a href="{{ route('admin.welcome.index') }}" class="btn btn-secondary mb-3">
        Kembali
    </a>

    <div class="card shadow-sm">
        <div class="card-body">

          <form action="{{ route('admin.welcome.update', $welcome->id) }}" 
      method="POST" 
      enctype="multipart/form-data"> <!-- penting untuk file -->

    @csrf
    @method('PUT') <!-- penting! memberi tahu Laravel ini update -->



                <div class="row">

                    <!-- IMAGE PREVIEW -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset($welcome->image) }}"
                             alt="Foto Kepala Sekolah"
                             class="img-fluid rounded mb-3"
                             style="max-height: 250px; object-fit: cover;">
                    </div>

                    <div class="col-md-8">

                        <!-- SUBTITLE -->
                        <div class="mb-3">
                            <label class="form-label">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control"
                                   value="{{ old('subtitle', $welcome->subtitle) }}" required>
                        </div>

                        <!-- TITLE -->
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{ old('title', $welcome->title) }}" required>
                        </div>

                        <!-- TEXT 1 -->
                        <div class="mb-3">
                            <label class="form-label">Paragraf 1</label>
                            <textarea name="text1" class="form-control" rows="3" required>{{ old('text1', $welcome->text1) }}</textarea>
                        </div>

                        <!-- TEXT 2 -->
                        <div class="mb-3">
                            <label class="form-label">Paragraf 2</label>
                            <textarea name="text2" class="form-control" rows="3">{{ old('text2', $welcome->text2) }}</textarea>
                        </div>

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Nama Kepala Sekolah</label>
                            <input type="text" name="name" class="form-control"
                                   value="{{ old('name', $welcome->name) }}" required>
                        </div>

                        <!-- POSITION -->
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" name="position" class="form-control"
                                   value="{{ old('position', $welcome->position) }}" required>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Foto Kepala Sekolah (opsional)</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-muted">Format: JPG, JPEG, PNG | Maks 2 MB</small>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-primary">
                            Simpan Perubahan
                        </button>

                    </div>

                </div>
            </form>

        </div>
    </div>

</div>
@endsection
