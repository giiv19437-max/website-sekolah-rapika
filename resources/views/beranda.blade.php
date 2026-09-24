@extends('layouts.app')

@section('title', 'Beranda - SMKN 1 Cijati')

@section('content')

<style>

    /* ===============================
       BERANDA
    =============================== */

    .beranda {
        font-family: 'Poppins', sans-serif;
        background: #f5f8fc;
        min-height: 100vh;
    }


    /* ===============================
       HERO
    =============================== */

    .hero {
        min-height: 430px;
        padding: 75px 25px;

        display: flex;
        align-items: center;
        justify-content: center;

        text-align: center;

        background:
            linear-gradient(
                135deg,
                #172f67,
                #0878df
            );

        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: "";
        position: absolute;

        width: 350px;
        height: 350px;

        border-radius: 50%;

        background: rgba(255,255,255,.08);

        top: -150px;
        right: -80px;
    }

    .hero::after {
        content: "";
        position: absolute;

        width: 280px;
        height: 280px;

        border-radius: 50%;

        background: rgba(70,220,255,.08);

        bottom: -140px;
        left: -80px;
    }

    .hero-content {
        max-width: 850px;
        position: relative;
        z-index: 2;
    }

    .hero-label {
        font-size: 13px;
        font-weight: 600;

        letter-spacing: 1px;

        color: #9beaff;

        margin-bottom: 15px;
    }

    .hero h1 {
        margin: 0;

        font-size: 48px;
        line-height: 1.2;

        font-weight: 700;
    }

    .hero h1 span {
        color: #43ddff;
        display: block;
    }

    .hero p {
        max-width: 720px;

        margin: 18px auto 28px;

        font-size: 15px;
        line-height: 1.8;

        color: #e7f3ff;
    }


    /* ===============================
       BUTTON
    =============================== */

    .hero-buttons {
        display: flex;

        justify-content: center;

        gap: 12px;

        flex-wrap: wrap;
    }

    .btn-hero {
        display: inline-block;

        padding: 12px 22px;

        border-radius: 10px;

        text-decoration: none;

        font-size: 13px;
        font-weight: 600;

        transition: .3s;
    }

    .btn-white {
        background: white;
        color: #1266d6;
    }

    .btn-white:hover {
        transform: translateY(-3px);

        color: #1266d6;

        background: #edf7ff;
    }

    .btn-outline {
        border: 1px solid white;
        color: white;
    }

    .btn-outline:hover {
        background: white;
        color: #1266d6;
    }


    /* ===============================
       STATISTIK SEKOLAH
    =============================== */

    .stats-section {
        background: #f5f8fc;

        padding: 40px 25px 20px;
    }

    .stats-container {
        max-width: 850px;

        margin: auto;

        display: grid;

        grid-template-columns:
            repeat(2, 1fr);

        gap: 25px;
    }

    .stat-card {
        background: white;

        padding: 25px;

        border-radius: 18px;

        display: flex;

        align-items: center;

        gap: 18px;

        box-shadow:
            0 8px 25px rgba(20,55,100,.08);

        transition: .3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);

        box-shadow:
            0 15px 30px rgba(20,55,100,.15);
    }

    .stat-icon {
        width: 65px;
        height: 65px;

        flex-shrink: 0;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 16px;

        background: #edf6ff;

        font-size: 29px;
    }

    .stat-info h3 {
        margin: 0;

        color: #172f67;

        font-size: 30px;

        font-weight: 700;
    }

    .stat-info p {
        margin: 3px 0 0;

        color: #758196;

        font-size: 13px;
    }


    /* ===============================
       MENU UTAMA
    =============================== */

    .menu-section {
        max-width: 1150px;

        margin: auto;

        padding: 65px 25px;
    }

    .section-heading {
        text-align: center;

        margin-bottom: 40px;
    }

    .section-heading small {
        color: #1684e8;

        font-size: 12px;

        font-weight: 600;
    }

    .section-heading h2 {
        margin: 7px 0;

        color: #17243c;

        font-size: 30px;

        font-weight: 700;
    }

    .section-heading p {
        max-width: 650px;

        margin: auto;

        color: #758196;

        font-size: 14px;
    }


    /* ===============================
       CARD
    =============================== */

    .menu-grid {
        display: grid;

        grid-template-columns:
            repeat(4, 1fr);

        gap: 20px;
    }

    .menu-card {
        background: white;

        padding: 28px 20px;

        border-radius: 18px;

        text-align: center;

        box-shadow:
            0 8px 25px rgba(20,55,100,.08);

        transition: .3s;
    }

    .menu-card:hover {
        transform: translateY(-7px);

        box-shadow:
            0 15px 30px rgba(20,55,100,.15);
    }

    .menu-icon {
        width: 60px;
        height: 60px;

        margin: 0 auto 15px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 16px;

        background: #edf6ff;

        font-size: 27px;
    }

    .menu-card h3 {
        margin: 0 0 8px;

        color: #18243d;

        font-size: 17px;

        font-weight: 600;
    }

    .menu-card p {
        margin: 0;

        color: #7a8699;

        font-size: 12px;

        line-height: 1.7;
    }

    .menu-card a {
        display: inline-block;

        margin-top: 15px;

        color: #1684e8;

        text-decoration: none;

        font-size: 12px;

        font-weight: 600;
    }

    .menu-card a:hover {
        color: #0c56ae;
    }


    /* ===============================
       TENTANG
    =============================== */

    .about {
        background: white;

        padding: 70px 25px;
    }

    .about-container {
        max-width: 1150px;

        margin: auto;

        display: grid;

        grid-template-columns:
            1fr 1fr;

        gap: 50px;

        align-items: center;
    }

    .about-label {
        color: #1684e8;

        font-size: 12px;

        font-weight: 600;
    }

    .about h2 {
        margin: 8px 0 15px;

        color: #18243d;

        font-size: 30px;

        font-weight: 700;
    }

    .about p {
        color: #6f7c91;

        font-size: 14px;

        line-height: 1.8;
    }

    .about-box {
        padding: 35px;

        border-radius: 20px;

        background:
            linear-gradient(
                135deg,
                #edf6ff,
                #ffffff
            );

        border: 1px solid #e0ecf8;
    }

    .about-box h3 {
        margin-top: 0;

        color: #183b70;

        font-size: 20px;
    }

    .about-box p {
        margin-bottom: 0;
    }


    /* ===============================
       CTA
    =============================== */

    .cta {
        max-width: 1100px;

        margin: 55px auto;

        padding: 50px 25px;

        border-radius: 22px;

        text-align: center;

        background:
            linear-gradient(
                135deg,
                #173b78,
                #1684e8
            );

        color: white;
    }

    .cta h2 {
        margin: 0 0 10px;

        font-size: 28px;
    }

    .cta p {
        max-width: 650px;

        margin: 0 auto 22px;

        font-size: 13px;

        color: #e7f4ff;
    }


    /* ===============================
       RESPONSIVE
    =============================== */

    @media (max-width: 900px) {

        .menu-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

        .about-container {
            grid-template-columns: 1fr;
        }

        .hero h1 {
            font-size: 40px;
        }
    }


    @media (max-width: 600px) {

        .hero {
            min-height: 400px;

            padding: 60px 18px;
        }

        .hero h1 {
            font-size: 32px;
        }

        .hero p {
            font-size: 13px;
        }

        .stats-section {
            padding: 30px 18px 10px;
        }

        .stats-container {
            grid-template-columns: 1fr;
        }

        .stat-card {
            padding: 20px;
        }

        .menu-section {
            padding: 50px 18px;
        }

        .menu-grid {
            grid-template-columns: 1fr;
        }

        .section-heading h2 {
            font-size: 25px;
        }

        .about {
            padding: 50px 18px;
        }

        .about h2 {
            font-size: 25px;
        }

        .cta {
            margin: 35px 18px;

            padding: 40px 20px;
        }
    }

</style>


<div class="beranda">


    <!-- =================================
         HERO BERANDA
    ================================== -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                🏫 SELAMAT DATANG DI SMKN 1 CIJATI
            </div>

            <h1>
                smkn 1 cijati
                <span>Menuju Masa Depan</span>
            </h1>

            <p>
                Website resmi SMKN 1 Cijati yang menyediakan
                informasi sekolah, program keahlian, kegiatan,
                galeri, dan berbagai informasi terbaru sekolah.
            </p>

        
            </div>

        </div>

    </section>

    <!-- =================================
         STATISTIK SEKOLAH
    ================================== -->

    <section class="stats-section">

        <div class="stats-container">


            <!-- JUMLAH SISWA -->

            <div class="stat-card">

                <div class="stat-icon">
                    👨‍🎓
                </div>

                <div class="stat-info">

                    <h3>
                        {{ $jumlahSiswa ?? 0 }}
                    </h3>

                    <p>
                        Jumlah Siswa
                    </p>

                </div>

            </div>


            <!-- JUMLAH GURU -->

            <div class="stat-card">

                <div class="stat-icon">
                    👨‍🏫
                </div>

                <div class="stat-info">

                    <h3>
                        {{ $jumlahGuru ?? 0 }}
                    </h3>

                    <p>
                        Jumlah Guru
                    </p>

                </div>

            </div>


        </div>

    </section>


    <!-- =================================
         MENU UTAMA
    ================================== -->

    <section class="menu-section">

        <div class="section-heading">

         

            <h2>
                Jelajahi smkn 1 cijati
            </h2>

            <p>
                Temukan berbagai informasi mengenai sekolah,
                kegiatan siswa, jurusan, dan dokumentasi sekolah.
            </p>

        </div>


        <div class="menu-grid">


            <!-- PROFIL -->

            <div class="menu-card">

                <div class="menu-icon">
                    🏫
                </div>

                <h3>
                    Profil Sekolah
                </h3>

                <p>
                    Kenali lebih dekat SMKN 1 Cijati,
                    visi, misi, dan informasi sekolah.
                </p>

                <a href="{{ route('profil') }}">
                    Lihat Profil →
                </a>

            </div>


            <!-- JURUSAN -->

            <div class="menu-card">

                <div class="menu-icon">
                    🎓
                </div>

                <h3>
                    Jurusan
                </h3>

                <p>
                    Lihat berbagai program keahlian
                    yang tersedia di sekolah.
                </p>

                <a href="{{ route('jurusan') }}">
                    Lihat Jurusan →
                </a>

            </div>


            <!-- EKSKUL -->

            <div class="menu-card">

                <div class="menu-icon">
                    ⭐
                </div>

                <h3>
                    Ekstrakurikuler
                </h3>

               
                <a href="{{ route('ekstrakurikuler') }}">
                    Lihat Ekskul →
                </a>

            </div>


            <!-- GALERI -->

            <div class="menu-card">

                <div class="menu-icon">
                    📸
                </div>

                <h3>
                    Galeri
                </h3>

                <p>
                    Lihat dokumentasi kegiatan dan
                    momen menarik di sekolah.
                </p>

                <a href="{{ route('galeri') }}">
                    Lihat Galeri →
                </a>

            </div>

        </div>

    </section>


    <!-- =================================
         TENTANG SEKOLAH
    ================================== -->

    <section class="about">

        <div class="about-container">


            <div>

                <div class="about-label">
                    TENTANG SEKOLAH
                </div>

                <h2>
                    SMKN 1 Cijati
                </h2>

                <p>
                    SMKN 1 Cijati merupakan sekolah yang
                    berkomitmen memberikan pendidikan dan
                    keterampilan kepada siswa agar menjadi
                    generasi yang kompeten, kreatif,
                    berkarakter, serta siap menghadapi
                    perkembangan dunia kerja dan teknologi.
                </p>

                <a href="{{ route('profil') }}"
                   class="btn-hero btn-white"
                   style="
                       background:#1684e8;
                       color:white;
                   ">
                    Selengkapnya →
                </a>

            </div>


            <div class="about-box">

                <h3>
                    💡 Pendidikan untuk Masa Depan
                </h3>

                <p>
                    Membangun siswa yang memiliki keterampilan,
                    kreativitas, kedisiplinan, dan kesiapan
                    untuk menghadapi dunia kerja maupun
                    melanjutkan pendidikan.
                </p>

            </div>

        </div>

    </section>


    <!-- =================================
         INFORMASI
    ================================== -->

    <section class="menu-section">

        <div class="section-heading">

            <small>
                INFORMASI SEKOLAH
            </small>

            <h2>
                Informasi & Kegiatan
            </h2>

            <p>
                Dapatkan informasi terbaru mengenai kegiatan,
                pengumuman, dan berbagai kegiatan sekolah.
            </p>

        </div>


        <div class="menu-grid">


            <!-- ARTIKEL -->

            <div class="menu-card">

                <div class="menu-icon">
                    📰
                </div>

                <h3>
                    Artikel
                </h3>

                <p>
                    Baca artikel dan informasi terbaru
                    mengenai kegiatan sekolah.
                </p>

                <a href="{{ route('informasi') }}">
                    Baca Artikel →
                </a>

            </div>


            <!-- INFORMASI -->

            <div class="menu-card">

                <div class="menu-icon">
                    📢
                </div>

                <h3>
                    Informasi
                </h3>

                <p>
                    Lihat berbagai pengumuman dan
                    informasi penting sekolah.
                </p>

                <a href="{{ route('informasi') }}">
                    Lihat Informasi →
                </a>

            </div>


            <!-- GALERI -->

            <div class="menu-card">

                <div class="menu-icon">
                    🖼️
                </div>

                <h3>
                    Galeri
                </h3>

                <p>
                    Dokumentasi kegiatan dan momen
                    sekolah dalam bentuk foto.
                </p>

                <a href="{{ route('galeri') }}">
                    Lihat Galeri →
                </a>

            </div>


            <!-- KONTAK -->

            <div class="menu-card">

                <div class="menu-icon">
                    📞
                </div>

                <h3>
                    Kontak
                </h3>

                <p>
                    Temukan informasi kontak dan
                    lokasi SMKN 1 Cijati.
                </p>

                <a href="{{ route('kontak') }}">
                    Hubungi Kami →
                </a>

            </div>

        </div>

    </section>


    <!-- =================================
         CTA
    ================================== -->

    <section class="cta">

        <h2>
            Ingin Mengenal SMKN 1 Cijati?
        </h2>

        <p>
            Jelajahi informasi sekolah, jurusan,
            ekstrakurikuler, kegiatan, dan berbagai
            dokumentasi menarik lainnya.
        </p>

        <a href="{{ route('profil') }}"
           class="btn-hero btn-white">
            Kenali Sekolah Kami →
        </a>

    </section>


</div>

@endsection