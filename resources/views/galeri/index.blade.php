@extends('layouts.app')

@section('title', 'Galeri - SMKN 1 Cijati')

@section('content')

<style>
    .galeri-page {
        font-family: 'Poppins', sans-serif;
        background: #f5f8fc;
        min-height: 100vh;
    }

    /* ================= HERO ================= */

    .galeri-hero {
        min-height: 300px;
        padding: 70px 20px;

        display: flex;
        align-items: center;
        justify-content: center;

        text-align: center;

        background:
            linear-gradient(
                135deg,
                rgba(20, 37, 75, .95),
                rgba(0, 119, 255, .90)
            );

        color: white;
    }

    .galeri-hero h1 {
        margin: 0;
        font-size: 48px;
        font-weight: 700;
        letter-spacing: -1px;
    }

    .galeri-hero h1 span {
        color: #42d9ff;
    }

    .galeri-hero p {
        margin-top: 15px;
        font-size: 15px;
        color: #e8f4ff;
    }


    /* ================= CONTENT ================= */

    .galeri-content {
        max-width: 1200px;
        margin: auto;
        padding: 55px 25px 80px;
    }

    .section-title {
        margin-bottom: 30px;
    }

    .section-title small {
        color: #1684e8;
        font-size: 13px;
        font-weight: 600;
    }

    .section-title h2 {
        margin: 5px 0;
        color: #17233c;
        font-size: 30px;
        font-weight: 700;
    }

    .section-title p {
        margin: 0;
        color: #69758a;
        font-size: 14px;
    }


    /* ================= GALERI GRID ================= */

    .galeri-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }


    /* ================= CARD ================= */

    .galeri-card {
        background: white;
        border-radius: 18px;
        overflow: hidden;

        box-shadow: 0 8px 25px rgba(22, 55, 95, .10);

        transition: .3s ease;
    }

    .galeri-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 35px rgba(22, 55, 95, .17);
    }


    /* ================= FOTO ================= */

    .galeri-image {
        width: 100%;
        height: 220px;
        overflow: hidden;
        background: #e9eef5;
    }

    .galeri-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;

        display: block;

        transition: .4s ease;
    }

    .galeri-card:hover .galeri-image img {
        transform: scale(1.06);
    }


    /* ================= INFO CARD ================= */

    .galeri-info {
        padding: 20px;
    }

    .galeri-info h3 {
        margin: 0 0 8px;

        color: #18243d;
        font-size: 18px;
        font-weight: 600;
    }

    .galeri-info p {
        margin: 0;

        color: #758198;
        font-size: 13px;
        line-height: 1.6;
    }


    /* ================= TANGGAL ================= */

    .galeri-date {
        display: inline-block;

        margin-bottom: 10px;

        color: #1684e8;
        font-size: 11px;
        font-weight: 600;
    }


    /* ================= JIKA DATA KOSONG ================= */

    .empty-galeri {
        grid-column: 1 / -1;

        padding: 60px 20px;

        text-align: center;

        background: white;
        border-radius: 18px;

        box-shadow: 0 8px 25px rgba(22, 55, 95, .08);
    }

    .empty-galeri h3 {
        color: #263653;
        margin-bottom: 8px;
    }

    .empty-galeri p {
        color: #7b879a;
        font-size: 14px;
    }


    /* ================= RESPONSIVE ================= */

    @media (max-width: 900px) {

        .galeri-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .galeri-hero h1 {
            font-size: 38px;
        }
    }


    @media (max-width: 600px) {

        .galeri-grid {
            grid-template-columns: 1fr;
        }

        .galeri-hero {
            min-height: 250px;
            padding: 50px 20px;
        }

        .galeri-hero h1 {
            font-size: 32px;
        }

        .galeri-content {
            padding: 40px 18px;
        }

        .section-title h2 {
            font-size: 25px;
        }
    }
</style>


<div class="galeri-page">

    <!-- ================= HERO ================= -->

    <section class="galeri-hero">

        <div>

            <h1>
                Galeri <span>Sekolah</span>
            </h1>

            <p>
                Lihat berbagai dokumentasi kegiatan dan momen menarik
                di SMKN 1 Cijati.
            </p>

        </div>

    </section>


    <!-- ================= GALERI ================= -->

    <section class="galeri-content">

        <div class="section-title">

            <small>📸 DOKUMENTASI SEKOLAH</small>

            <h2>
                Galeri Kegiatan
            </h2>

            <p>
                Dokumentasi berbagai kegiatan siswa dan warga
                SMKN 1 Cijati.
            </p>

        </div>


        <div class="galeri-grid">

            {{-- DATA DARI DATABASE --}}

            @forelse ($galeris as $galeri)

                <div class="galeri-card">

                    <div class="galeri-image">

                        @if($galeri->foto)

                            <img
                                src="{{ asset('storage/' . $galeri->foto) }}"
                                alt="{{ $galeri->judul }}"
                            >

                        @else

                            <img
                                src="https://via.placeholder.com/600x400?text=Foto+Sekolah"
                                alt="Foto Sekolah"
                            >

                        @endif

                    </div>


                    <div class="galeri-info">

                        @if($galeri->created_at)
                            <div class="galeri-date">
                                📅 {{ $galeri->created_at->format('d F Y') }}
                            </div>
                        @endif

                        <h3>
                            {{ $galeri->judul }}
                        </h3>

                        @if($galeri->deskripsi)
                            <p>
                                {{ $galeri->deskripsi }}
                            </p>
                        @endif

                    </div>

                </div>

            @empty

                <div class="empty-galeri">

                    <h3>
                        📷 Belum Ada Foto
                    </h3>

                    <p>
                        Dokumentasi kegiatan sekolah akan ditampilkan
                        di halaman ini.
                    </p>

                </div>

            @endforelse

        </div>

    </section>

</div>

@endsection