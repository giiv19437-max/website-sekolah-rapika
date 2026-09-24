@extends('layouts.app')

@section('title', 'Profil - SMKN 1 Cijati')

@section('content')

<style>
    .profil-page {
        background: #f5f8ff;
        min-height: 100vh;
    }

    .profil-hero {
        padding: 90px 20px;
        background: linear-gradient(135deg, #061a3a, #0757c9, #16a9ff);
        color: white;
        text-align: center;
    }

    .profil-hero h1 {
        font-size: 45px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .profil-hero h1 span {
        color: #55d8ff;
    }

    .profil-hero p {
        max-width: 750px;
        margin: auto;
        color: #e6f5ff;
        line-height: 1.8;
    }

    .profil-container {
        max-width: 1150px;
        margin: auto;
        padding: 70px 20px;
    }

    .profil-card {
        background: white;
        border-radius: 25px;
        padding: 35px;
        margin-bottom: 30px;
        box-shadow: 0 15px 40px rgba(0,0,0,.08);
    }

    .profil-card h2 {
        color: #0757c9;
        font-weight: 800;
        margin-bottom: 18px;
    }

    .profil-card p {
        color: #64748b;
        line-height: 1.9;
    }

    .profil-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .visi-card {
        background: white;
        padding: 30px;
        border-radius: 22px;
        box-shadow: 0 10px 30px rgba(0,0,0,.07);
        transition: .3s;
    }

    .visi-card:hover {
        transform: translateY(-8px);
    }

    .visi-icon {
        width: 60px;
        height: 60px;
        border-radius: 18px;
        background: #e0f2fe;
        color: #0284c7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 27px;
        margin-bottom: 20px;
    }

    .visi-card h3 {
        font-weight: 700;
        color: #0f172a;
    }

    .visi-card p {
        color: #64748b;
        line-height: 1.7;
    }

    @media(max-width: 768px) {
        .profil-hero h1 {
            font-size: 32px;
        }

        .profil-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="profil-page">

    <section class="profil-hero">
        <h1>Profil <span>SMKN 1 Cijati</span></h1>


    <div class="profil-container">

        <div class="profil-card">
            <h2>Tentang Sekolah</h2>

            <p>
                SMKN 1 Cijati merupakan sekolah menengah kejuruan
                yang memberikan pendidikan berbasis keahlian dan
                keterampilan. Sekolah terus berusaha memberikan
                pembelajaran terbaik agar siswa mampu mengembangkan
                potensi dan bakat yang dimiliki.
            </p>

            <p>
                Dengan lingkungan belajar yang nyaman serta didukung
                oleh tenaga pendidik, SMKN 1 Cijati mendorong siswa
                untuk menjadi generasi yang memiliki kompetensi,
                karakter dan kreativitas.
            </p>
        </div>

        <div class="profil-grid">

            <div class="visi-card">
                <div class="visi-icon">🎯</div>

                <h3>Visi</h3>

                <p>
                    Menjadi sekolah kejuruan yang unggul,
                    berkarakter, berprestasi dan siap menghadapi
                    perkembangan teknologi.
                </p>
            </div>

            <div class="visi-card">
                <div class="visi-icon">🚀</div>

                <h3>Misi</h3>

                <p>
                    Meningkatkan kualitas pembelajaran dan
                    keterampilan siswa sesuai kebutuhan dunia
                    kerja dan perkembangan zaman.
                </p>
            </div>

            <div class="visi-card">
                <div class="visi-icon">🏆</div>

                <h3>Prestasi</h3>

                <p>
                    Mengembangkan potensi siswa melalui berbagai
                    kegiatan akademik, non-akademik dan
                    ekstrakurikuler.
                </p>
            </div>

        </div>

    </div>

</div>

@endsection