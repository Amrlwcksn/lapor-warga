
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Laporan - LaporWarga</title>
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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <a href="{{ route('warga.reports.index') }}" class="text-decoration-none">
                    &larr; Kembali ke laporan
                </a>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h2 class="fw-bold mb-2">Buat Laporan</h2>
                        <p class="text-secondary mb-4">
                            Sampaikan permasalahan yang terjadi di lingkungan desa.
                        </p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form
                            action="{{ route('warga.reports.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Judul laporan</label>
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="form-control"
                                    maxlength="150"
                                    value="{{ old('title') }}"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Kategori</label>
                                <select name="category_id" id="category_id" class="form-select" required>
                                    <option value="">Pilih kategori</option>
                                    @foreach ($categories as $category)
                                        <option
                                            value="{{ $category->id }}"
                                            @selected(old('category_id') == $category->id)
                                        >
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Lokasi kejadian</label>
                                <input
                                    type="text"
                                    name="location"
                                    id="location"
                                    class="form-control"
                                    maxlength="255"
                                    value="{{ old('location') }}"
                                    placeholder="Contoh: Jalan dekat balai desa"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi laporan</label>
                                <textarea
                                    name="description"
                                    id="description"
                                    class="form-control"
                                    rows="5"
                                    maxlength="5000"
                                    required
                                >{{ old('description') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="photo" class="form-label">Foto bukti (opsional)</label>
                                <input
                                    type="file"
                                    name="photo"
                                    id="photo"
                                    class="form-control"
                                    accept=".jpg,.jpeg,.png,.webp"
                                >
                                <div class="form-text">JPG, PNG, atau WebP. Maksimal 2 MB.</div>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Kirim Laporan
                            </button>

                            <a href="{{ route('warga.reports.index') }}" class="btn btn-light">
                                Batal
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
