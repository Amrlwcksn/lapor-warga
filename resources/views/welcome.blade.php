<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F4C94E">
    <title>LaporWarga | Desa Curugsewu</title>
    <meta name="description" content="Portal informasi dan layanan pengaduan warga Desa Curugsewu, Kecamatan Patean, Kabupaten Kendal.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFFEFB] font-['DM_Sans'] text-[#222B25] antialiased">
    <header class="sticky top-0 z-50 border-b border-[#E9E8DF]/85 bg-[#FFFEFB]/90 backdrop-blur-xl">
        <div class="mx-auto flex min-h-[82px] w-[min(1160px,calc(100%-40px))] items-center justify-between gap-6 max-[520px]:min-h-[70px] max-[520px]:w-[calc(100%-32px)]">
            <a href="{{ url('/') }}" class="flex shrink-0 items-center gap-3" aria-label="LaporWarga Desa Curugsewu - Beranda">
                <!-- <span class="grid size-[46px] place-items-center rounded-[15px] bg-[#F4C94E] text-[#193625] shadow-[0_7px_18px_rgba(234,184,46,.2)] max-[520px]:size-10">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 10 9-7 9 7"/><path d="M5.5 9v11h13V9"/><path d="M9.5 20v-6h5v6"/></svg>
                </span> -->
                <span>
                    <span class="block font-['Plus_Jakarta_Sans'] text-lg font-extrabold leading-tight tracking-[-.5px] text-[#244D37] max-[520px]:text-base">LaporWarga</span>
                    <span class="mt-1 block text-[11px] leading-tight text-[#68736B] max-[520px]:text-[10px]">Desa Curugsewu, Kendal</span>
                </span>
            </a>
            <nav class="flex items-center gap-7 text-[13px] font-bold max-[980px]:gap-4 max-[800px]:gap-3 max-[800px]:[&>a:not(.nav-cta)]:hidden" aria-label="Navigasi utama">
                <a class="transition hover:text-[#A67A0A]" href="#beranda">Beranda</a>
                <a class="transition hover:text-[#A67A0A]" href="#profil">Profil Desa</a>
                <a class="transition hover:text-[#A67A0A]" href="#layanan">Layanan</a>
                <a class="transition hover:text-[#A67A0A]" href="#tentang">Tentang</a>
                <a href="{{ url('/login') }}" class="nav-cta inline-flex min-h-[46px] items-center justify-center gap-2 rounded-xl bg-[#244D37] px-5 py-3 font-extrabold text-white transition hover:-translate-y-0.5 hover:bg-[#193625] max-[520px]:min-h-10 max-[520px]:px-3.5 max-[520px]:py-2.5 max-[520px]:text-xs">Masuk <span aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </header>

    <main>
        <section id="beranda" class="relative overflow-hidden bg-[radial-gradient(circle_at_4%_12%,rgba(244,201,78,.15),transparent_25%),linear-gradient(180deg,#FFFCF1_0%,#FFFEFB_100%)] py-[72px] after:pointer-events-none after:absolute after:-right-[4%] after:-top-[235px] after:size-[380px] after:rounded-full after:border after:border-[#EAB82E]/25 after:content-[''] max-[800px]:py-14 max-[520px]:py-[43px]">
            <div class="relative mx-auto grid w-[min(1160px,calc(100%-40px))] grid-cols-[1.02fr_.98fr] items-center gap-[58px] max-[980px]:gap-[35px] max-[800px]:w-[calc(100%-32px)] max-[800px]:grid-cols-1 max-[800px]:gap-9">
                <div class="relative z-10 py-2">
                    <div class="mb-[23px] inline-flex items-center gap-2.5 rounded-full border border-[#F0E2AD] bg-white/80 px-[13px] py-2 text-[11px] font-extrabold tracking-[.2px] text-[#244D37]">
                        <span class="size-2 rounded-full bg-[#EAB82E] shadow-[0_0_0_4px_rgba(244,201,78,.2)]"></span>
                        Portal Warga Desa Curugsewu
                    </div>
                    <h1 class="mb-[21px] max-w-[640px] font-['Plus_Jakarta_Sans'] text-[clamp(38px,5.4vw,65px)] font-extrabold leading-[1.12] tracking-[-2.8px] text-[#193625] max-[520px]:text-[clamp(36px,10vw,48px)] max-[520px]:tracking-[-1.7px]">
                        Curugsewu,<br>desa kita <span class="relative inline-block text-[#B88709] after:absolute after:inset-x-0 after:bottom-0 after:-z-0 after:h-[13px] after:rounded after:bg-[#F4C94E]/40 after:content-['']"><span class="relative z-10">tumbuh</span></span><br>bersama.
                    </h1>
                    <p class="mb-7 max-w-[535px] text-[15px] leading-[1.9] text-[#68736B] max-[520px]:text-[13px]">
                        Mengenal desa, menjaga lingkungan, dan menyampaikan aspirasi kini terasa lebih dekat.
                        LaporWarga menjadi ruang digital untuk membantu warga Curugsewu berpartisipasi
                        membangun lingkungan desa yang lebih nyaman dan peduli.
                    </p>
                    <div class="flex flex-wrap gap-3 max-[520px]:items-stretch">
                        <a href="{{ url('/login') }}" class="inline-flex min-h-[46px] items-center justify-center gap-2.5 rounded-xl bg-[#F4C94E] px-5 py-3 text-[13px] font-extrabold text-[#193625] shadow-[0_8px_22px_rgba(234,184,46,.18)] transition hover:-translate-y-0.5 hover:bg-[#F8D568] hover:shadow-[0_11px_27px_rgba(234,184,46,.25)] max-[520px]:flex-[1_1_170px] max-[520px]:px-3">Buat Laporan <span aria-hidden="true">→</span></a>
                        <a href="#profil" class="inline-flex min-h-[46px] items-center justify-center gap-2.5 rounded-xl border border-[#D8DCCF] bg-white/70 px-5 py-3 text-[13px] font-extrabold text-[#244D37] transition hover:-translate-y-0.5 hover:border-[#EAB82E] hover:bg-white max-[520px]:flex-[1_1_170px] max-[520px]:px-3">Kenali Desa Kami</a>
                    </div>
                    <div class="mt-[30px] flex items-start gap-2.5 text-xs text-[#68736B]">
                        <svg class="mt-0.5 size-[17px] shrink-0 text-[#B88709]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                        <div><strong class="text-[#244D37]">Desa Curugsewu</strong> · Kecamatan Patean, Kabupaten Kendal, Jawa Tengah</div>
                    </div>
                </div>
                <div class="relative min-w-0 px-0 pb-[26px] pt-2 max-[800px]:mx-auto max-[800px]:w-full max-[800px]:max-w-[600px] max-[800px]:pl-[15px]">
                    <div class="relative h-[440px] overflow-hidden rounded-[28px_28px_80px_28px] border-[8px] border-white/85 bg-[#DCE7D9] shadow-[0_18px_55px_rgba(37,51,40,.09)] max-[980px]:h-[390px] max-[520px]:h-[310px] max-[520px]:rounded-[22px_22px_55px_22px] max-[520px]:border-[5px]">
                        <img class="size-full object-cover object-center" src="{{ asset('images/curug-sewu-hero.jpeg') }}" alt="Air terjun bertingkat Curug Sewu di kawasan Patean, Kabupaten Kendal" fetchpriority="high">
                    </div>
                    <div class="absolute -bottom-0 left-[-30px] z-10 flex min-w-[200px] items-center gap-[13px] rounded-[17px] border border-[#E9E8DF]/90 bg-white px-[19px] py-4 shadow-[0_15px_35px_rgba(32,48,34,.11)] max-[800px]:left-[-1px] max-[520px]:min-w-[180px] max-[520px]:px-3.5 max-[520px]:py-3">
                        <span class="grid size-[42px] shrink-0 place-items-center rounded-[13px] bg-[#FFF7D9] text-[#244D37]"><svg class="size-[22px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 20h18"/><path d="M5 20V9l7-5 7 5v11"/><path d="M9 20v-6h6v6"/></svg></span>
                        <span><strong class="block font-['Plus_Jakarta_Sans'] text-[19px] font-extrabold leading-tight text-[#244D37]">11 Dusun</strong><span class="block text-[10px] text-[#68736B]">Dalam wilayah Desa Curugsewu</span></span>
                    </div>
                </div>
            </div>
        </section>

        <section id="profil" class="bg-[#FFFCF1] py-[88px] max-[800px]:py-[65px]">
            <div class="mx-auto grid w-[min(1160px,calc(100%-40px))] grid-cols-[.95fr_1.05fr] items-center gap-[66px] max-[980px]:gap-10 max-[800px]:w-[calc(100%-32px)] max-[800px]:grid-cols-1 max-[800px]:gap-9">
                <div class="relative pb-[22px] pl-[18px] max-[800px]:w-full max-[800px]:max-w-[610px]">
                    <div class="min-h-[430px] overflow-hidden rounded-[24px_24px_24px_70px] bg-[#EAF1E9] shadow-[0_18px_55px_rgba(37,51,40,.09)] max-[980px]:min-h-[390px] max-[520px]:min-h-[310px]">
                        <img class="h-[430px] w-full object-cover object-center max-[980px]:h-[390px] max-[520px]:h-[310px]" src="{{ asset('images/curug-sewu-profil.png') }}" alt="Panorama air terjun dan vegetasi hijau di Curug Sewu" loading="lazy">
                    </div>
                    <div class="absolute bottom-0 left-0 flex max-w-[calc(100%-10px)] items-center gap-2.5 rounded-[0_16px_16px_16px] bg-[#F4C94E] px-[18px] py-[15px] text-[#193625] shadow-[0_10px_25px_rgba(234,184,46,.18)]">
                        <svg class="size-[22px] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg>
                        <span><strong class="block text-xs leading-tight">Alam, budaya, kebersamaan</strong><span class="block text-[10px] opacity-80">Identitas Desa Curugsewu</span></span>
                    </div>
                </div>
                <div>
                    <div class="mb-[11px] inline-flex items-center gap-2 text-[11px] font-extrabold uppercase tracking-[1.8px] text-[#9B740B] before:h-0.5 before:w-[22px] before:rounded before:bg-[#EAB82E] before:content-['']">Mengenal Desa Kita</div>
                    <h2 class="mb-[17px] font-['Plus_Jakarta_Sans'] text-[clamp(29px,4vw,41px)] font-extrabold leading-[1.25] tracking-[-1.5px] text-[#193625] max-[520px]:tracking-[-.9px]">Desa yang tumbuh dari alam dan kebersamaan.</h2>
                    <p class="mb-[14px] text-sm leading-[1.9] text-[#68736B]">Desa Curugsewu berada di Kecamatan Patean, Kabupaten Kendal, Jawa Tengah. Wilayahnya dikenal dengan lanskap perbukitan dan keberadaan Curug Sewu, objek wisata air terjun bertingkat yang dikelola Pemerintah Kabupaten Kendal.</p>
                    <p class="mb-[14px] text-sm leading-[1.9] text-[#68736B]">Sejarah desa mencatat bahwa wilayah ini berawal dari Desa Patean dan Desa Curug, yang kemudian digabung pada 1954 sebelum nama Curugsewu digunakan. Tradisi Merti Desa dan pagelaran wayang kulit juga menjadi bagian dari dokumentasi budaya masyarakat.</p>
                    <div class="mt-[25px] grid grid-cols-2 gap-3 max-[520px]:gap-[9px]">
                        <div class="rounded-[15px] border border-[#E9E8DF] bg-white p-[18px] max-[520px]:p-3.5"><strong class="mb-1 block font-['Plus_Jakarta_Sans'] text-[23px] font-extrabold leading-tight tracking-[-.5px] text-[#244D37] max-[520px]:text-xl">11</strong><span class="block text-[11px] leading-relaxed text-[#68736B]">Dusun di Desa Curugsewu</span></div>
                        <div class="rounded-[15px] border border-[#E9E8DF] bg-white p-[18px] max-[520px]:p-3.5"><strong class="mb-1 block font-['Plus_Jakarta_Sans'] text-[23px] font-extrabold leading-tight tracking-[-.5px] text-[#244D37] max-[520px]:text-xl">281,906 ha</strong><span class="block text-[11px] leading-relaxed text-[#68736B]">Luas wilayah menurut profil resmi desa</span></div>
                    </div>
                    <p class="mt-2.5 text-[10px] text-[#828980]">Sumber: Profil resmi Desa Curugsewu. Data penduduk perlu dilihat berdasarkan periode pencatatan terbaru.</p>
                    <a href="https://curugsewu.desa.id/profile" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex items-center gap-2 text-[13px] font-extrabold text-[#244D37]">Baca profil resmi desa <span class="text-[#A67A0A] transition group-hover:translate-x-1" aria-hidden="true">↗</span></a>
                </div>
            </div>
        </section>

        <section id="layanan" class="bg-white py-[88px] max-[800px]:py-[65px]">
            <div class="mx-auto w-[min(1160px,calc(100%-40px))] max-[800px]:w-[calc(100%-32px)]">
                <div class="mb-[38px] max-w-[690px] max-[520px]:mb-7">
                    <div class="mb-[11px] inline-flex items-center gap-2 text-[11px] font-extrabold uppercase tracking-[1.8px] text-[#9B740B] before:h-0.5 before:w-[22px] before:rounded before:bg-[#EAB82E] before:content-['']">Layanan Digital</div>
                    <h2 class="mb-[13px] font-['Plus_Jakarta_Sans'] text-[clamp(29px,4vw,41px)] font-extrabold leading-[1.25] tracking-[-1.5px] text-[#193625] max-[520px]:tracking-[-.9px]">Satu ruang untuk suara warga.</h2>
                    <p class="text-sm leading-[1.9] text-[#68736B]">LaporWarga membantu warga menyampaikan persoalan lingkungan dan mengikuti perkembangan laporan. Partisipasi masyarakat menjadi salah satu langkah untuk membangun desa yang lebih tertata dan saling peduli.</p>
                </div>

                <div class="mx-auto w-[min(1160px,calc(100%-40px))] max-[800px]:w-[calc(100%-32px)]">
                    <div class="relative flex items-center justify-between gap-[35px] overflow-hidden rounded-[25px] border border-[#EFD777] bg-[#F4C94E] px-[50px] py-[47px] after:pointer-events-none after:absolute after:-right-[16%] after:-top-[155px] after:size-[260px] after:rounded-full after:border after:border-[#244D37]/15 after:shadow-[0_0_0_25px_rgba(255,255,255,.07),0_0_0_55px_rgba(255,255,255,.06)] after:content-[''] max-[800px]:flex-col max-[800px]:items-start max-[800px]:p-[34px] max-[520px]:rounded-[20px] max-[520px]:p-[27px_23px]">
                        <div class="relative z-10">
                            <h2 class="mb-2.5 max-w-[620px] font-['Plus_Jakarta_Sans'] text-[clamp(25px,3.5vw,35px)] font-extrabold leading-[1.3] tracking-[-1px] text-[#193625]">Ada hal yang perlu diperbaiki di lingkunganmu?</h2>
                            <p class="max-w-[580px] text-[13px] leading-[1.85] text-[#193625]/80">Suara warga berperan dalam menjaga lingkungan desa. Sampaikan laporan melalui LaporWarga agar permasalahan tercatat dan dapat ditindaklanjuti sesuai prosedur.</p>
                        </div>
                        <a href="{{ url('/login') }}" class="relative z-10 inline-flex min-h-[46px] shrink-0 items-center justify-center gap-2.5 rounded-xl bg-[#244D37] px-5 py-3 text-[13px] font-extrabold text-white shadow-[0_8px_20px_rgba(25,54,37,.13)] transition hover:-translate-y-0.5 hover:bg-[#193625] max-[800px]:self-stretch">Laporkan Sekarang <span aria-hidden="true">→</span></a>
                    </div>
                </div>
                <!-- <div class="grid grid-cols-3 gap-[19px] max-[800px]:grid-cols-1">
                    <article class="group relative min-h-[275px] overflow-hidden rounded-[19px] border border-[#E9E8DF] bg-white p-[27px_25px_25px] transition duration-300 after:absolute after:-bottom-[43px] after:-right-10 after:size-[90px] after:rounded-full after:bg-[#FFF7D9] after:content-[''] hover:-translate-y-1 hover:border-[#EBD78D] hover:shadow-[0_18px_55px_rgba(37,51,40,.09)] hover:after:scale-150 max-[800px]:min-h-0 max-[520px]:p-6">
                        <div class="mb-[22px] grid size-[52px] place-items-center rounded-2xl border border-[#F0E3B7] bg-[#FFF7D9] text-[#244D37]"><svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6"/><path d="M8 13h8M8 17h6"/></svg></div>
                        <h3 class="relative z-10 mb-[9px] font-['Plus_Jakarta_Sans'] text-base font-extrabold tracking-[-.3px] text-[#193625]">Sampaikan Laporan</h3>
                        <p class="relative z-10 mb-[17px] text-xs leading-[1.85] text-[#68736B]">Laporkan masalah kebersihan, jalan, fasilitas umum, atau persoalan lingkungan yang memerlukan perhatian.</p>
                        <a href="{{ url('/login') }}" class="relative z-10 text-xs font-extrabold text-[#244D37]">Mulai melapor <span class="ml-1 text-[#A67A0A]">→</span></a>
                    </article>
                    <article class="group relative min-h-[275px] overflow-hidden rounded-[19px] border border-[#E9E8DF] bg-white p-[27px_25px_25px] transition duration-300 after:absolute after:-bottom-[43px] after:-right-10 after:size-[90px] after:rounded-full after:bg-[#FFF7D9] after:content-[''] hover:-translate-y-1 hover:border-[#EBD78D] hover:shadow-[0_18px_55px_rgba(37,51,40,.09)] hover:after:scale-150 max-[800px]:min-h-0 max-[520px]:p-6">
                        <div class="mb-[22px] grid size-[52px] place-items-center rounded-2xl border border-[#F0E3B7] bg-[#FFF7D9] text-[#244D37]"><svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/><path d="m8.5 11 1.7 1.7 3.3-3.4"/></svg></div>
                        <h3 class="relative z-10 mb-[9px] font-['Plus_Jakarta_Sans'] text-base font-extrabold tracking-[-.3px] text-[#193625]">Pantau Perkembangan</h3>
                        <p class="relative z-10 mb-[17px] text-xs leading-[1.85] text-[#68736B]">Periksa status laporan yang sudah dikirim melalui akun, sehingga informasinya mudah diikuti.</p>
                        <a href="{{ url('/login') }}" class="relative z-10 text-xs font-extrabold text-[#244D37]">Lihat laporan <span class="ml-1 text-[#A67A0A]">→</span></a>
                    </article>
                    <article class="group relative min-h-[275px] overflow-hidden rounded-[19px] border border-[#E9E8DF] bg-white p-[27px_25px_25px] transition duration-300 after:absolute after:-bottom-[43px] after:-right-10 after:size-[90px] after:rounded-full after:bg-[#FFF7D9] after:content-[''] hover:-translate-y-1 hover:border-[#EBD78D] hover:shadow-[0_18px_55px_rgba(37,51,40,.09)] hover:after:scale-150 max-[800px]:min-h-0 max-[520px]:p-6">
                        <div class="mb-[22px] grid size-[52px] place-items-center rounded-2xl border border-[#F0E3B7] bg-[#FFF7D9] text-[#244D37]"><svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="10" cy="7" r="4"/><path d="M20 8v6M23 11h-6"/></svg></div>
                        <h3 class="relative z-10 mb-[9px] font-['Plus_Jakarta_Sans'] text-base font-extrabold tracking-[-.3px] text-[#193625]">Partisipasi Warga</h3>
                        <p class="relative z-10 mb-[17px] text-xs leading-[1.85] text-[#68736B]">Ikut menjaga kenyamanan lingkungan dengan menyampaikan informasi dan kepedulian secara bertanggung jawab.</p>
                        <a href="#tentang" class="relative z-10 text-xs font-extrabold text-[#244D37]">Kenali peranmu <span class="ml-1 text-[#A67A0A]">→</span></a>
                    </article>
                </div>
                <div class="mt-[22px] grid grid-cols-2 gap-[18px] max-[800px]:grid-cols-1">
                    <article class="flex items-start gap-4 rounded-[17px] border border-[#F0E7C8] bg-[#FFFCF1] p-[23px] max-[520px]:p-[18px]">
                        <div class="grid size-11 shrink-0 place-items-center rounded-[13px] bg-[#F4C94E] text-[#244D37]"><svg class="size-[22px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v18M3 12h18"/><circle cx="12" cy="12" r="9"/></svg></div>
                        <div><h3 class="mb-1 font-['Plus_Jakarta_Sans'] text-sm font-bold text-[#193625]">Gotong royong dan lingkungan</h3><p class="text-xs leading-[1.8] text-[#68736B]">Semangat kebersamaan tercermin dalam kegiatan masyarakat, termasuk tradisi Merti Desa yang terdokumentasi di situs desa.</p></div>
                    </article>
                    <article class="flex items-start gap-4 rounded-[17px] border border-[#F0E7C8] bg-[#FFFCF1] p-[23px] max-[520px]:p-[18px]">
                        <div class="grid size-11 shrink-0 place-items-center rounded-[13px] bg-[#F4C94E] text-[#244D37]"><svg class="size-[22px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 21h18M5 21V8l7-5 7 5v13"/><path d="M9 21v-6h6v6M9 10h.01M15 10h.01"/></svg></div>
                        <div><h3 class="mb-1 font-['Plus_Jakarta_Sans'] text-sm font-bold text-[#193625]">Budaya dan sejarah lokal</h3><p class="text-xs leading-[1.8] text-[#68736B]">Kenali kisah terbentuknya Curugsewu serta dokumentasi tradisi dan kesenian lokal melalui arsip resmi desa.</p></div>
                    </article>
                </div> -->
            </div>
        </section>

    <footer class="bg-[#193625] py-12 pb-[23px] text-white">
        <div class="mx-auto w-[min(1160px,calc(100%-40px))] max-[800px]:w-[calc(100%-32px)]">
            <div class="flex justify-between gap-[45px] pb-[33px] max-[800px]:flex-col max-[800px]:gap-7">
                <div>
                    <a href="{{ url('/') }}" class="flex items-center gap-3" aria-label="LaporWarga Desa Curugsewu - Beranda">
                        <!-- <span class="grid size-[46px] place-items-center rounded-[15px] bg-[#F4C94E] text-[#193625]"><svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 10 9-7 9 7"/><path d="M5.5 9v11h13V9"/><path d="M9.5 20v-6h5v6"/></svg></span> -->
                        <span><span class="block font-['Plus_Jakarta_Sans'] text-lg font-extrabold leading-tight text-white">LaporWarga</span><span class="mt-1 block text-[11px] leading-tight text-[#C7D3C8]">Desa Curugsewu</span></span>
                    </a>
                    <p class="mt-[15px] max-w-[415px] text-xs leading-[1.9] text-white/70">Portal digital untuk mendukung partisipasi warga dan penyampaian laporan demi lingkungan Desa Curugsewu yang lebih nyaman, peduli, dan terhubung.</p>
                </div>
                <div>
                    <h4 class="mb-[13px] font-['Plus_Jakarta_Sans'] text-xs font-bold text-[#FFF4C9]">Navigasi</h4>
                    <div class="grid gap-2 text-xs text-white/75">
                        <a class="transition hover:text-[#F4C94E]" href="#beranda">Beranda</a>
                        <a class="transition hover:text-[#F4C94E]" href="#profil">Profil Desa</a>
                        <a class="transition hover:text-[#F4C94E]" href="#layanan">Layanan Warga</a>
                        <a class="transition hover:text-[#F4C94E]" href="https://curugsewu.desa.id/" target="_blank" rel="noopener noreferrer">Website Resmi Desa ↗</a>
                        <a class="transition hover:text-[#F4C94E]" href="{{ url('/login') }}">Masuk ke Akun</a>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-4 border-t border-white/15 pt-[19px] text-[10px] text-white/55 max-[800px]:flex-col">
                <span>© {{ date('Y') }} LaporWarga Desa Curugsewu.</span>
                <span>Dibuat untuk mendukung partisipasi warga.</span>
            </div>
        </div>
    </footer>
</body>
</html>