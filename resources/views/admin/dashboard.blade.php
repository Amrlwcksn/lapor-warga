<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - LaporWarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}">
            LaporWarga — Admin
        </a>

        <div class="d-flex align-items-center gap-3">
            <span class="text-white small">
                {{ auth()->user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light btn-sm" type="submit">
                    Keluar
                </button>
            </form>
        </div>
    </div>
</nav>

<main class="container py-4 py-md-5">

    <div class="mb-4">
        <h2 class="fw-bold mb-1">Dashboard Admin</h2>
        <p class="text-secondary mb-0">
            Pantau dan kelola laporan yang dikirim oleh warga.
        </p>
    </div>

    {{-- Statistik laporan --}}
    <div class="row g-3 mb-5">

        <div class="col-6 col-lg">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary small mb-2">Semua Laporan</p>
                    <h3 class="fw-bold mb-0">{{ $totalReports }}</h3>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary small mb-2">Menunggu</p>
                    <h3 class="fw-bold text-warning mb-0">{{ $pendingReports }}</h3>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary small mb-2">Diproses</p>
                    <h3 class="fw-bold text-primary mb-0">{{ $inProgressReports }}</h3>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary small mb-2">Selesai</p>
                    <h3 class="fw-bold text-success mb-0">{{ $resolvedReports }}</h3>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary small mb-2">Ditolak</p>
                    <h3 class="fw-bold text-danger mb-0">{{ $rejectedReports }}</h3>
                </div>
            </div>
        </div>

    </div>

    {{-- Tabel semua laporan --}}
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0 p-3 p-md-4">
            <h5 class="fw-bold mb-1">Semua Laporan Warga</h5>
            <p class="text-secondary small mb-0">
                Daftar laporan dari seluruh warga yang terdaftar.
            </p>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-3">No.</th>
                        <th>Judul Laporan</th>
                        <th>Pelapor</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($reports as $report)
                        <tr>
                            <td class="ps-3">
                                {{ $reports->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <span class="fw-semibold">
                                    {{ $report->title }}
                                </span>
                                <div class="small text-secondary">
                                    {{ $report->location }}
                                </div>
                            </td>

                            <td>
                                {{ $report->user->name ?? 'Pengguna tidak ditemukan' }}
                                <div class="small text-secondary">
                                    {{ $report->user->email ?? '-' }}
                                </div>
                            </td>

                            <td>
                                {{ $report->category->name ?? '-' }}
                            </td>

                            <td class="text-nowrap">
                                {{ $report->created_at->format('d/m/Y') }}
                            </td>

                            <td>
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

                                <span class="badge text-bg-{{ $status[1] }}">
                                    {{ $status[0] }}
                                </span>
                            </td>

                            <td class="text-center">
                                <a
                                    href="{{ route('admin.reports.show', $report->id) }}"
                                    class="btn btn-primary btn-sm"
                                >
                                    Detail
                                </a>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5">
                                <p class="fw-semibold mb-1">
                                    Belum ada laporan
                                </p>
                                <p class="text-secondary small mb-0">
                                    Laporan warga akan muncul di sini.
                                </p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($reports->hasPages())
            <div class="card-footer bg-white border-0 p-3">
                {{ $reports->links() }}
            </div>
        @endif
    </div>

</main>

</body>
</html>
