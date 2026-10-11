
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Warga - LaporWarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <span class="navbar-brand fw-bold">LaporWarga</span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light btn-sm" type="submit">Keluar</button>
            </form>
        </div>
    </nav>

    <main class="container py-5">
        <div class="card border-0 shadow-sm p-4">
            <h2>Dashboard Warga</h2>
            <p>Selamat datang, <strong>{{ auth()->user()->name }}</strong>!</p>
            <p class="text-secondary">
                Buat laporan permasalahan di lingkungan desa dan pantau perkembangannya.
            </p>

            <a href="{{ route('warga.reports.create') }}" class="btn btn-success">
                + Buat Laporan
            </a>

            <a href="{{ route('warga.reports.index') }}" class="btn btn-outline-success">
                Lihat Laporan Saya
            </a>
        </div>
    </main>
</body>
</html>
