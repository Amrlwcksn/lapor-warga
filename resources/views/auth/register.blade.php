
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - LaporWarga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center py-4">
        <div class="card shadow-sm border-0 p-4" style="width: 100%; max-width: 480px;">
            <h2 class="fw-bold text-center mb-2">Buat Akun</h2>
            <p class="text-secondary text-center mb-4">Daftar sebagai warga untuk membuat laporan</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama lengkap</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor telepon (opsional)</label>
                    <input
                        type="tel"
                        name="phone"
                        id="phone"
                        class="form-control"
                        value="{{ old('phone') }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        minlength="8"
                        required
                    >
                    <div class="form-text">Minimal 8 karakter.</div>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control"
                        minlength="8"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-success w-100">Daftar</button>
            </form>

            <p class="text-center mt-4 mb-0">
                Sudah punya akun?
                <a href="{{ route('login') }}">Masuk</a>
            </p>
        </div>
    </div>
</body>
</html>
