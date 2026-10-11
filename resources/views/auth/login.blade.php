```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk - LaporWarga</title>
    <meta name="theme-color" content="#F8F8F3">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        civic: {
                            green: '#244D37',
                            dark: '#193625',
                            yellow: '#F4C94E',
                            background: '#F8F8F3',
                            muted: '#68756B',
                        }
                    }
                }
            }
        };
    </script>
</head>

<body class="min-h-screen bg-civic-background font-sans text-slate-800 antialiased">

    <div class="min-h-screen lg:grid lg:grid-cols-[1.05fr_0.95fr]">

        <!-- PANEL INFORMASI -->
        <aside class="relative hidden overflow-hidden bg-civic-green text-white lg:flex lg:flex-col lg:justify-between lg:p-12 xl:p-16">

            <!-- Elemen dekoratif geometris -->
            <div class="pointer-events-none absolute -right-24 -top-24 h-80 w-80 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -right-12 -top-12 h-56 w-56 rounded-full border border-white/10"></div>
            <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full border border-white/10"></div>

            <!-- Identitas -->
            <a href="{{ route('home') }}" class="relative z-10 inline-flex w-fit items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-civic-yellow text-civic-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </span>

                <span>
                    <span class="block font-heading text-xl font-extrabold tracking-tight">
                        LaporWarga
                    </span>
                    <span class="block text-xs text-white/65">
                        Desa Curugsewu
                    </span>
                </span>
            </a>

            <!-- Konten utama panel -->
            <div class="relative z-10 my-16 max-w-xl">

                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-3.5 py-2 text-xs font-medium text-white/85">
                    <span class="h-2 w-2 rounded-full bg-civic-yellow"></span>
                    PORTAL PELAYANAN DESA
                </div>

                <h1 class="font-heading text-4xl font-extrabold leading-tight tracking-tight xl:text-5xl">
                    Suara warga,<br>
                    <span class="text-civic-yellow">kemajuan bersama.</span>
                </h1>

                <p class="mt-6 max-w-md text-base leading-7 text-white/70">
                    Sampaikan aspirasi dan laporan Anda untuk membantu
                    mewujudkan lingkungan Desa Curugsewu yang lebih baik.
                </p>

                <!-- Informasi singkat -->
                <div class="mt-10 grid grid-cols-2 gap-4">

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-civic-yellow/15 text-civic-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
                                <path d="M8 9h8M8 13h5"/>
                            </svg>
                        </div>
                        <h2 class="font-heading text-sm font-bold">
                            Sampaikan Laporan
                        </h2>
                        <p class="mt-2 text-xs leading-5 text-white/60">
                            Sampaikan keluhan dan aspirasi melalui satu portal.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                        <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-civic-yellow/15 text-civic-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>
                        </div>
                        <h2 class="font-heading text-sm font-bold">
                            Pantau Laporan
                        </h2>
                        <p class="mt-2 text-xs leading-5 text-white/60">
                            Ikuti perkembangan laporan Anda melalui akun.
                        </p>
                    </div>

                </div>
            </div>

            <!-- Footer panel -->
            <div class="relative z-10 flex items-center justify-between gap-4 border-t border-white/15 pt-6 text-xs text-white/50">
                <span>Desa Curugsewu</span>
                <span>Pelayanan publik berbasis digital</span>
            </div>
        </aside>


        <!-- AREA LOGIN -->
        <main class="flex min-h-screen flex-col px-5 py-6 sm:px-10 lg:px-12 xl:px-20">

            <!-- Header mobile -->
            <header class="mb-10 lg:hidden">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-civic-yellow text-civic-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    </span>

                    <span>
                        <span class="block font-heading text-lg font-extrabold text-civic-dark">
                            LaporWarga
                        </span>
                        <span class="block text-xs text-slate-500">
                            Desa Curugsewu
                        </span>
                    </span>
                </a>
            </header>

            <!-- Form di tengah halaman -->
            <div class="flex flex-1 items-center justify-center py-4">
                <div class="w-full max-w-md">

                    <div class="mb-8">
                        <p class="mb-3 text-xs font-bold uppercase tracking-[0.18em] text-civic-green">
                            AKUN WARGA
                        </p>

                        <h2 class="font-heading text-3xl font-extrabold tracking-tight text-civic-dark sm:text-4xl">
                            Selamat datang.
                        </h2>

                        <p class="mt-3 text-sm leading-6 text-slate-500">
                            Masuk ke akun Anda untuk melanjutkan ke portal LaporWarga.
                        </p>
                    </div>

                    <!-- Pesan error validasi -->
                    @if ($errors->any())
                        <div role="alert" class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                            <p class="mb-1 font-bold">Login belum berhasil</p>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <!-- Pesan status -->
                    @if (session('status'))
                        <div role="status" class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-800">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Form login -->
                    <form action="{{ route('login.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                                Alamat email
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                required
                                autofocus
                                aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-civic-green focus:ring-4 focus:ring-civic-green/10"
                            >
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between">
                                <label for="password" class="block text-sm font-semibold text-slate-700">
                                    Kata sandi
                                </label>
                            </div>

                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Masukkan kata sandi"
                                autocomplete="current-password"
                                required
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-civic-green focus:ring-4 focus:ring-civic-green/10"
                            >
                        </div>

                        <div class="flex items-center justify-between gap-3 pt-1">
                            <label for="remember" class="inline-flex cursor-pointer items-center gap-2.5 text-sm text-slate-600">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    value="1"
                                    class="h-4 w-4 rounded border-slate-300 accent-civic-green focus:ring-civic-green"
                                >
                                Ingat saya
                            </label>
                        </div>

                        <button
                            type="submit"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-civic-green px-5 py-3.5 text-sm font-bold text-white transition hover:bg-civic-dark focus:outline-none focus:ring-4 focus:ring-civic-green/20 active:scale-[0.99]"
                        >
                            Masuk ke akun
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14m-7-7 7 7-7 7"/>
                            </svg>
                        </button>
                    </form>

                    <!-- Registrasi -->
                    <div class="mt-7 rounded-xl border border-slate-200/80 bg-white/70 p-4 text-center">
                        <p class="text-sm text-slate-500">
                            Belum memiliki akun?
                            <a href="{{ route('register') }}" class="font-bold text-civic-green underline-offset-4 transition hover:underline">
                                Daftar sekarang
                            </a>
                        </p>
                    </div>

                    <!-- Kembali ke halaman utama -->
                    <div class="mt-6 text-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 transition hover:text-civic-green">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6"/>
                            </svg>
                            Kembali ke halaman utama
                        </a>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <footer class="mt-8 border-t border-slate-200/80 py-5 text-center">
                <p class="text-xs leading-5 text-slate-400">
                    &copy; {{ date('Y') }} LaporWarga Desa Curugsewu.
                    <span class="block sm:inline">Pelayanan untuk warga, bersama warga.</span>
                </p>
            </footer>

        </main>
    </div>

</body>
</html>
```