@extends('layouts.app')

@section('title', 'Jurusan - SMKN 1 Cijati')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #f4f7fb;
        color: #172033;
    }

    /* ================= HERO ================= */

    .jurusan-hero {
        position: relative;
        overflow: hidden;
        padding: 80px 20px 100px;
        background: linear-gradient(
            135deg,
            #06152b 0%,
            #0b3d73 55%,
            #1686c5 100%
        );
        color: white;
    }

    .jurusan-hero::before {
        content: "";
        position: absolute;
        width: 450px;
        height: 450px;
        border-radius: 50%;
        background: rgba(255,255,255,.07);
        top: -250px;
        right: -100px;
    }

    .jurusan-hero::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(255,255,255,.06);
        bottom: -200px;
        left: -100px;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 1000px;
        margin: auto;
        text-align: center;
    }

    .hero-badge {
        display: inline-block;
        padding: 9px 18px;
        border-radius: 50px;
        background: rgba(255,255,255,.13);
        border: 1px solid rgba(255,255,255,.25);
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .hero-content h1 {
        font-size: 48px;
        margin: 0 0 15px;
        font-weight: 800;
    }

    .hero-content h1 span {
        color: #7ddcff;
    }

    .hero-content p {
        max-width: 700px;
        margin: auto;
        line-height: 1.8;
        font-size: 16px;
        color: rgba(255,255,255,.85);
    }

    /* ================= CONTAINER ================= */

    .jurusan-container {
        width: 90%;
        max-width: 1150px;
        margin: 70px auto;
    }

    /* ================= TITLE ================= */

    .section-title {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-title small {
        color: #0875c1;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .section-title h2 {
        font-size: 34px;
        margin: 8px 0;
        font-weight: 800;
    }

    .section-title p {
        color: #718096;
        margin: 0;
    }

    /* ================= GRID ================= */

    .jurusan-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    /* ================= CARD ================= */

    .jurusan-card {
        background: white;
        border-radius: 22px;
        overflow: hidden;
        border: 1px solid #e8edf3;
        box-shadow: 0 10px 35px rgba(20,40,70,.08);
        transition: .35s ease;
    }

    .jurusan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(20,40,70,.15);
    }

    /* ================= IMAGE ================= */

    .jurusan-image {
        height: 250px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(
            135deg,
            #dceaf5,
            #edf4f9
        );
    }

    .jurusan-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: .5s ease;
    }

    .jurusan-card:hover .jurusan-image img {
        transform: scale(1.08);
    }

    .image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(0,0,0,.5),
            transparent 65%
        );
    }

    .jurusan-number {
        position: absolute;
        top: 16px;
        left: 16px;
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: white;
        color: #0869aa;
        font-weight: 800;
        box-shadow: 0 5px 15px rgba(0,0,0,.15);
    }

    .jurusan-label {
        position: absolute;
        bottom: 15px;
        left: 18px;
        padding: 8px 14px;
        border-radius: 30px;
        background: rgba(255,255,255,.95);
        color: #075d98;
        font-size: 12px;
        font-weight: 700;
    }

    /* ================= BODY ================= */

    .jurusan-body {
        padding: 25px;
    }

    .jurusan-body h3 {
        margin: 0 0 10px;
        font-size: 25px;
        font-weight: 800;
        color: #152238;
    }

    .jurusan-body p {
        color: #718096;
        line-height: 1.7;
        font-size: 14px;
        margin: 18px 0 20px;
    }

    /* ================= SINGKATAN ================= */

    .jurusan-singkatan {
        display: inline-block;
        padding: 7px 13px;
        border-radius: 20px;
        background: #e8f4fc;
        color: #0874c1;
        font-size: 12px;
        font-weight: 700;
    }

    /* ================= INFO ================= */

    .jurusan-info {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 22px;
    }

    .info-box {
        padding: 9px 12px;
        background: #f1f6fa;
        border-radius: 9px;
        font-size: 12px;
        color: #50677b;
    }

    /* ================= EMPTY ================= */

    .empty-data {
        grid-column: 1 / -1;
        background: white;
        padding: 60px 20px;
        text-align: center;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,.06);
    }

    .empty-icon {
        font-size: 55px;
        margin-bottom: 15px;
    }

    .empty-data h3 {
        margin-bottom: 10px;
    }

    .empty-data p {
        color: #718096;
    }

    /* ================= RESPONSIVE ================= */

    @media (max-width: 768px) {

        .jurusan-grid {
            grid-template-columns: 1fr;
        }

        .hero-content h1 {
            font-size: 36px;
        }

        .section-title h2 {
            font-size: 28px;
        }
    }

    @media (max-width: 480px) {

        .jurusan-hero {
            padding: 60px 20px 80px;
        }

        .hero-content h1 {
            font-size: 30px;
        }

        .hero-content p {
            font-size: 14px;
        }

        .jurusan-image {
            height: 220px;
        }

        .jurusan-body {
            padding: 20px;
        }
    }
</style>


{{-- ================= HERO ================= --}}

<section class="jurusan-hero">

    <div class="hero-content">

        <span class="hero-badge">
            🎓 PROGRAM KEAHLIAN SMKN 1 CIJATI
        </span>

        <h1>
            Pilih Jurusanmu,
            <span>Raih Masa Depanmu</span>
        </h1>

        <p>
            Kenali berbagai program keahlian yang tersedia
            di SMKN 1 Cijati dan temukan jurusan yang sesuai
            dengan minat, bakat, dan cita-citamu.
        </p>

    </div>

</section>


{{-- ================= DAFTAR JURUSAN ================= --}}

<section class="jurusan-container">

    <div class="section-title">

        <small>PROGRAM KEAHLIAN</small>

        <h2>Jurusan SMKN 1 Cijati</h2>

        <p>
            Temukan jurusan yang sesuai dengan minat dan bakat kamu.
        </p>

    </div>


    <div class="jurusan-grid">

        @forelse ($jurusans as $jurusan)

            <div class="jurusan-card">

                {{-- ================= FOTO JURUSAN ================= --}}

                <div class="jurusan-image">

                    @if($jurusan->gambar)

                        <img
                            src="{{ asset('storage/' . $jurusan->gambar) }}"
                            alt="{{ $jurusan->nama_jurusan }}"
                        >

                    @else

                        <img
                            src="{{ asset('images/default-jurusan.jpg') }}"
                            alt="Foto Jurusan"
                        >

                    @endif

                    <div class="image-overlay"></div>

                    <div class="jurusan-number">
                        {{ $loop->iteration }}
                    </div>

                    <span class="jurusan-label">
                        PROGRAM KEAHLIAN
                    </span>

                </div>


                {{-- ================= ISI CARD ================= --}}

                <div class="jurusan-body">

                    <h3>
                        {{ $jurusan->nama_jurusan }}
                    </h3>


                    {{-- SINGKATAN --}}

                    @if($jurusan->singkatan)

                        <span class="jurusan-singkatan">
                            {{ $jurusan->singkatan }}
                        </span>

                    @endif


                    {{-- DESKRIPSI --}}

                    <p>
                        {{ $jurusan->deskripsi ?? 'Belum ada deskripsi jurusan.' }}
                    </p>


                    {{-- INFORMASI --}}

                    <div class="jurusan-info">

                        <span class="info-box">
                            🎓 SMKN 1 Cijati
                        </span>

                        <span class="info-box">
                            📚 Program Keahlian
                        </span>

                    </div>

                </div>

            </div>

        @empty

            {{-- ================= JIKA DATA KOSONG ================= --}}

            <div class="empty-data">

                <div class="empty-icon">
                    🎓
                </div>

                <h3>
                    Belum Ada Data Jurusan
                </h3>

                <p>
                    Data jurusan belum tersedia.
                    Silakan tambahkan data melalui halaman admin.
                </p>

            </div>

        @endforelse

    </div>

</section>

@endsection