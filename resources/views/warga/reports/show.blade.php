
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan - LaporWarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <a href="{{ route('warga.dashboard') }}" class="navbar-brand fw-bold">LaporWarga</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">Keluar</button>
            </form>
        </div>
    </nav>

    <main class="container py-5">
        <a href="{{ route('warga.reports.index') }}" class="text-decoration-none">
            &larr; Kembali ke laporan saya
        </a>

        <div class="card border-0 shadow-sm mt-3">
            <div class="card-body p-4">
                <span class="badge bg-secondary">
                    {{ $report->category->name }}
                </span>

                <h2 class="fw-bold mt-3">{{ $report->title }}</h2>

                <p class="text-secondary">
                    Lokasi: {{ $report->location }}
                </p>

                <hr>

                <h6>Deskripsi laporan</h6>
                <p style="white-space: pre-line">{{ $report->description }}</p>

                @if ($report->photo_path)
                    <h6 class="mt-4">Foto bukti</h6>
                    <img
                        src="{{ asset('storage/' . $report->photo_path) }}"
                        alt="Foto bukti laporan"
                        class="img-fluid rounded"
                        style="max-height: 400px"
                    >
                @endif

                <div class="mt-4">
                    <h6>Status laporan</h6>

                    @switch($report->status)
                        @case('pending')
                            <span class="badge text-bg-warning">Menunggu</span>
                            @break
                        @case('in_progress')
                            <span class="badge text-bg-primary">Diproses</span>
                            @break
                        @case('resolved')
                            <span class="badge text-bg-success">Selesai</span>
                            @break
                        @case('rejected')
                            <span class="badge text-bg-danger">Ditolak</span>
                            @break
                        @default
                            <span class="badge text-bg-secondary">{{ $report->status }}</span>
                    @endswitch
                </div>

                @if ($report->admin_note)
                    <div class="alert alert-info mt-3 mb-0">
                        <strong>Catatan admin:</strong>
                        <p class="mb-0">{{ $report->admin_note }}</p>
                    </div>
                @endif

                <p class="text-secondary small mt-4 mb-0">
                    Tanggal laporan: {{ $report->created_at->format('d-m-Y H:i') }}
                </p>
            </div>
        </div>
    </main>
</body>
</html>
