<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan - LaporWarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}">
            LaporWarga — Admin
        </a>

        <div class="d-flex align-items-center gap-3">
            <span class="text-white small">{{ auth()->user()->name }}</span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">
                    Keluar
                </button>
            </form>
        </div>
    </div>
</nav>

<main class="container py-4">

    <div class="mb-4">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary btn-sm mb-3">
            &larr; Kembali ke Dashboard
        </a>

        <h2 class="fw-bold mb-1">Detail Laporan Warga</h2>
        <p class="text-secondary mb-0">
            Informasi lengkap laporan yang dikirim oleh warga.
        </p>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">

            <div class="d-flex flex-wrap justify-content-between gap-3 mb-3">
                <div>
                    <p class="text-secondary small mb-1">Nomor Laporan</p>
                    <h5 class="fw-bold">#{{ $report->id }}</h5>
                </div>

                <div>
                    @php
                        $statusLabels = [
                            'pending' => ['Menunggu', 'warning'],
                            'in_progress' => ['Diproses', 'primary'],
                            'resolved' => ['Selesai', 'success'],
                            'rejected' => ['Ditolak', 'danger'],
                        ];

                        $status = $statusLabels[$report->status]
                            ?? ['Tidak diketahui', 'secondary'];
                    @endphp

                    <span class="badge text-bg-{{ $status[1] }} fs-6">
                        {{ $status[0] }}
                    </span>
                </div>
            </div>

            <hr>

            <h4 class="fw-bold mb-3">{{ $report->title }}</h4>

            <div class="row g-4">
                <div class="col-md-6">
                    <p class="text-secondary small mb-1">Kategori</p>
                    <p class="fw-semibold">
                        {{ $report->category->name ?? '-' }}
                    </p>
                </div>

                <div class="col-md-6">
                    <p class="text-secondary small mb-1">Tanggal Laporan</p>
                    <p class="fw-semibold">
                        {{ $report->created_at?->format('d/m/Y H:i') ?? '-' }}
                    </p>
                </div>

                <div class="col-12">
                    <p class="text-secondary small mb-1">Lokasi Kejadian</p>
                    <p>{{ $report->location ?: '-' }}</p>
                </div>

                <div class="col-12">
                    <p class="text-secondary small mb-1">Deskripsi Laporan</p>
                    <div class="bg-light rounded p-3">
                        {!! nl2br(e($report->description)) !!}
                    </div>
                </div>

                @if ($report->photo_path)
                    <div class="col-12">
                        <p class="text-secondary small mb-2">Foto Bukti</p>
                        <a href="{{ asset('storage/' . $report->photo_path) }}" target="_blank" rel="noopener">
                            <img
                                src="{{ asset('storage/' . $report->photo_path) }}"
                                alt="Foto bukti laporan"
                                class="img-fluid rounded border"
                                style="max-height: 450px;"
                            >
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white p-3">
            <h5 class="fw-bold mb-0">Informasi Pelapor</h5>
        </div>

        <div class="card-body p-4">
            <div class="row g-3">
                <div class="col-md-6">
                    <p class="text-secondary small mb-1">Nama</p>
                    <p class="fw-semibold">{{ $report->user->name ?? 'Pengguna tidak ditemukan' }}</p>
                </div>

                <div class="col-md-6">
                    <p class="text-secondary small mb-1">Email</p>
                    <p class="fw-semibold">{{ $report->user->email ?? '-' }}</p>
                </div>
            </div>
        </div>
    </div>


{{-- Form pengelolaan laporan --}}
<div class="card border-0 shadow-sm mt-4">
    <div class="card-header bg-white p-3">
        <h5 class="fw-bold mb-0">Tindak Lanjut Laporan</h5>
    </div>

    <div class="card-body p-4">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Periksa kembali input berikut:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            action="{{ route('admin.reports.update', $report) }}"
            method="POST"
        >
            @csrf

            <div class="mb-3">
                <label for="status" class="form-label fw-semibold">
                    Status Laporan
                </label>

                <select name="status" id="status" class="form-select" required>
                    <option value="pending"
                        @selected(old('status', $report->status) === 'pending')>
                        Menunggu
                    </option>

                    <option value="in_progress"
                        @selected(old('status', $report->status) === 'in_progress')>
                        Diproses
                    </option>

                    <option value="resolved"
                        @selected(old('status', $report->status) === 'resolved')>
                        Selesai
                    </option>

                    <option value="rejected"
                        @selected(old('status', $report->status) === 'rejected')>
                        Ditolak
                    </option>
                </select>
            </div>

            <div class="mb-3">
                <label for="admin_note" class="form-label fw-semibold">
                    Catatan Admin
                </label>

                <textarea
                    name="admin_note"
                    id="admin_note"
                    rows="4"
                    maxlength="2000"
                    class="form-control"
                    placeholder="Tuliskan alasan penolakan atau informasi tindak lanjut..."
                >{{ old('admin_note', $report->admin_note) }}</textarea>

                <div class="form-text">
                    Catatan maksimal 2.000 karakter.
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>


</main>

</body>
</html>
