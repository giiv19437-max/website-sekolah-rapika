@extends('layouts.app')

@section('title', 'Ekstrakurikuler - SMKN 1 Cijati')

@section('content')

<style>
    .ekskul-page {
        background: #f5f8ff;
        min-height: 100vh;
    }

    .ekskul-hero {
        padding: 85px 20px;
        text-align: center;
        color: white;
        background: linear-gradient(135deg, #061a3a, #0757c9, #12b5ff);
    }

    .ekskul-hero h1 {
        font-size: 44px;
        font-weight: 800;
    }

    .ekskul-hero span {
        color: #55dcff;
    }

    .ekskul-hero p {
        max-width: 700px;
        margin: 15px auto;
        line-height: 1.8;
        color: #e6f5ff;
    }

    .ekskul-container {
        max-width: 1150px;
        margin: auto;
        padding: 65px 20px;
    }

    .ekskul-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .ekskul-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 12px 35px rgba(0,0,0,.08);
        transition: .3s;
    }

    .ekskul-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 45px rgba(0,0,0,.14);
    }

    .ekskul-image {
        width: 100%;
        height: 210px;
        object-fit: cover;
        display: block;
    }

    .ekskul-content {
        padding: 25px;
    }

    .ekskul-content h3 {
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 10px;
    }

    .ekskul-content p {
        color: #64748b;
        line-height: 1.7;
    }

    .ekskul-badge {
        display: inline-block;
        padding: 7px 13px;
        border-radius: 50px;
        background: #e0f2fe;
        color: #0369a1;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    @media(max-width: 900px) {
        .ekskul-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width: 600px) {
        .ekskul-grid {
            grid-template-columns: 1fr;
        }

        .ekskul-hero h1 {
            font-size: 32px;
        }
    }
</style>

<div class="ekskul-page">

    <section class="ekskul-hero">

        <h1>Ekstrakurikuler <span>smkn 1 cijati</span></h1>

    </section>

    <div class="ekskul-container">

        <div class="ekskul-grid">

            <div class="ekskul-card">
                <img src="{{ asset('images/ekskul-pramuka.jpg') }}"
                     class="ekskul-image"
                     alt="Pramuka">

                <div class="ekskul-content">
                    <span class="ekskul-badge">Organisasi</span>

                    <h3>Pramuka</h3>

                    <p>
                        Melatih kedisiplinan, kemandirian,
                        kepemimpinan dan kerja sama siswa.
                    </p>
                </div>
            </div>

            <div class="ekskul-card">
                <img src="{{ asset('images/ekskul-paskibra.jpg') }}"
                     class="ekskul-image"
                     alt="Paskibra">

                <div class="ekskul-content">
                    <span class="ekskul-badge">Kedisiplinan</span>

                    <h3>Paskibra</h3>

                    <p>
                        Kegiatan untuk membentuk siswa yang
                        disiplin, bertanggung jawab dan percaya diri.
                    </p>
                </div>
            </div>

            <div class="ekskul-card">
                <img src="{{ asset('images/ekskul-futsal.jpg') }}"
                     class="ekskul-image"
                     alt="Futsal">

                <div class="ekskul-content">
                    <span class="ekskul-badge">Olahraga</span>

                    <h3>Futsal</h3>

                    <p>
                        Mengembangkan kemampuan olahraga,
                        kekompakan dan sportivitas siswa.
                    </p>
                </div>
            </div>

            <div class="ekskul-card">
                <img src="{{ asset('images/ekskul-pmr.jpg') }}"
                     class="ekskul-image"
                     alt="PMR">

                <div class="ekskul-content">
                    <span class="ekskul-badge">Kesehatan</span>

                    <h3>PMR</h3>

                    <p>
                        Membentuk siswa yang peduli terhadap
                        kesehatan dan lingkungan sekitar.
                    </p>
                </div>
            </div>

            <div class="ekskul-card">
                <img src="{{ asset('images/ekskul-seni.jpg') }}"
                     class="ekskul-image"
                     alt="Seni">

                                        <div class="ekskul-content">
                    <span class="ekskul
                </div>
            </div>

            <div class="ekskul-card">
                <img src="{{ asset('images/ekskul-rohis.jpg') }}"
                     class="ekskul-image"
                     alt="Rohis">

                <div class="ekskul-content">
                    <span class="ekskul-badge">Keagamaan</span>

                    <h3>Rohis</h3>

                    <p>
                        Kegiatan yang membantu siswa mengembangkan
                        karakter dan nilai-nilai positif.
                    </p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection