
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Saya - LaporWarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <a href="{{ route('warga.dashboard') }}" class="navbar-brand fw-bold">
                LaporWarga
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm">Keluar</button>
            </form>
        </div>
    </nav>

    <main class="container py-5">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div>
                <h2 class="fw-bold mb-1">Laporan Saya</h2>
                <p class="text-secondary mb-0">
                    Pantau perkembangan laporan yang sudah kamu kirim.
                </p>
            </div>

            <a href="{{ route('warga.reports.create') }}" class="btn btn-success">
                + Buat Laporan
            </a>
        </div>

        @if ($reports->isEmpty())
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center py-5">
                    <h5>Belum ada laporan</h5>
                    <p class="text-secondary">
                        Kamu belum pernah mengirim laporan.
                    </p>
                    <a href="{{ route('warga.reports.create') }}" class="btn btn-success">
                        Buat Laporan Pertama
                    </a>
                </div>
            </div>
        @else
            <div class="row g-3">
                @foreach ($reports as $report)
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex flex-wrap justify-content-between gap-3">
                                    <div>
                                        <span class="badge bg-secondary mb-2">
                                            {{ $report->category->name }}
                                        </span>

                                        <h5 class="fw-bold mb-2">
                                            {{ $report->title }}
                                        </h5>

                                        <p class="text-secondary mb-2">
                                            {{ \Illuminate\Support\Str::limit($report->description, 160) }}
                                        </p>

                                        <div class="small text-secondary">
                                            Lokasi: {{ $report->location }}
                                        </div>

                                        <div class="small text-secondary mt-1">
                                            Dikirim: {{ $report->created_at->format('d-m-Y H:i') }}
                                        </div>
                                    </div>

                                    <div class="text-md-end">
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
                                                <span class="badge text-bg-secondary">
                                                    {{ $report->status }}
                                                </span>
                                        @endswitch

                                        <div class="mt-3">
                                            <a
                                                href="{{ route('warga.reports.show', $report) }}"
                                                class="btn btn-outline-success btn-sm"
                                            >
                                                Lihat Detail
                                            </a>
                                        </div>

                                        @if ($report->status === 'pending')
                                            <form
                                                action="{{ route('warga.reports.destroy', $report) }}"
                                                method="POST"
                                                class="mt-2"
                                                onsubmit="return confirm('Yakin ingin menghapus laporan ini?')"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $reports->links() }}
            </div>
        @endif
    </main>
</body>
</html>
