@extends('admin.layouts.app')

@section('content')

<div class="card shadow-sm p-4">
    <h3 class="mb-3">Daftar Pesan Masuk</h3>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Subjek</th>
                    <th>Pesan</th>
                    <th>Dikirim Pada</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contacts as $c)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <span class="badge bg-primary">{{ $c->jenisPesan }}</span>
                        </td>

                        <td>{{ $c->nama }}</td>
                        <td>{{ $c->email }}</td>

                        <td>
                            @if ($c->telepon)
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $c->telepon) }}"
                                   target="_blank" class="text-success fw-bold text-decoration-none">
                                    {{ $c->telepon }}
                                </a>
                            @else
                                -
                            @endif
                        </td>

                        <td>{{ $c->subject }}</td>

                        <td style="white-space: nowrap; max-width: 120px; overflow: hidden; text-overflow: ellipsis;">
                            {{ $c->isiPesan }}
                        </td>

                        <td>{{ $c->created_at->format('d-m-Y H:i') }}</td>

                        <td>
                            <button class="btn btn-sm btn-info text-white viewDetailBtn"
                                data-jenis="{{ $c->jenisPesan }}"
                                data-nama="{{ $c->nama }}"
                                data-email="{{ $c->email }}"
                                data-telepon="{{ $c->telepon }}"
                                data-subjek="{{ $c->subject }}"
                                data-pesan="{{ $c->isiPesan }}"
                                data-tanggal="{{ $c->created_at->format('d-m-Y H:i') }}">
                                Detail
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>


<!-- ============================
        MODAL DETAIL
============================== -->
<div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Detail Pesan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p><strong>Jenis:</strong> <span id="mJenis"></span></p>
                <p><strong>Nama:</strong> <span id="mNama"></span></p>
                <p><strong>Email:</strong> <span id="mEmail"></span></p>

                <p><strong>Telepon:</strong>
                    <a id="mTelepon" href="#" target="_blank" class="fw-bold text-success"></a>
                </p>

                <p><strong>Subjek:</strong> <span id="mSubjek"></span></p>

                <p><strong>Pesan:</strong></p>
                <div class="p-2 bg-light rounded border" id="mPesan" style="white-space: pre-line;"></div>

                <p class="mt-3"><strong>Dikirim Pada:</strong> <span id="mTanggal"></span></p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>

@endsection


@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll('.viewDetailBtn').forEach(btn => {
        btn.addEventListener('click', function () {

            const jenis   = this.dataset.jenis;
            const nama    = this.dataset.nama;
            const email   = this.dataset.email;
            const telepon = this.dataset.telepon;
            const subjek  = this.dataset.subjek;
            const pesan   = this.dataset.pesan;
            const tanggal = this.dataset.tanggal;

            document.getElementById('mJenis').innerText = jenis;
            document.getElementById('mNama').innerText = nama;
            document.getElementById('mEmail').innerText = email;

            const telElement = document.getElementById('mTelepon');

            if (telepon) {
                const waNumber = telepon.replace(/\D/g, '');
                telElement.innerText = telepon;
                telElement.href = "https://wa.me/" + waNumber;
            } else {
                telElement.innerText = "-";
                telElement.href = "#";
            }

            document.getElementById('mSubjek').innerText = subjek ?? '-';
            document.getElementById('mPesan').innerText  = pesan;
            document.getElementById('mTanggal').innerText = tanggal;

            new bootstrap.Modal(document.getElementById('detailModal')).show();
        });
    });

});
</script>
@endpush
