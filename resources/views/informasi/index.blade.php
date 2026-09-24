@extends('layouts.app')

@section('title', 'Informasi - SMKN 1 Cijati')

@section('content')

<style>
    .info-page {
        background: #f5f8ff;
        min-height: 100vh;
    }

    .info-hero {
        padding: 85px 20px;
        text-align: center;
        color: white;
        background: linear-gradient(135deg, #061a3a, #0757c9, #12b5ff);
    }

    .info-hero h1 {
        font-size: 45px;
        font-weight: 800;
    }

    .info-hero span {
        color: #5ee5ff;
    }

    .info-container {
        max-width: 1100px;
        margin: auto;
        padding: 65px 20px;
    }

    .info-card {
        background: white;
        padding: 30px;
        margin-bottom: 25px;
        border-radius: 22px;
        box-shadow: 0 10px 30px rgba(0,0,0,.07);
        transition: .3s;
    }

    .info-card:hover {
        transform: translateY(-5px);
    }

    .info-date {
        color: #0284c7;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .info-card h2 {
        color: #0f172a;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .info-card p {
        color: #64748b;
        line-height: 1.8;
    }

    .btn-info {
        display: inline-block;
        padding: 10px 18px;
        background: #0757c9;
        color: white;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        margin-top: 10px;
    }

    .btn-info:hover {
        background: #063f91;
        color: white;
    }
</style>

<div class="info-page">

    <section class="info-hero">

        <h1>Informasi <span>Sekolah</span></h1>

     
    </section>

    <div class="info-container">

        <div class="info-card">

            <div class="info-date">
                📅 15 September 2026
            </div>

            <h2>Informasi Kegiatan Sekolah</h2>


            <a href="#" class="btn-info">
                Baca Selengkapnya →
            </a>

        </div>

        <div class="info-card">

            <div class="info-date">
                📢 Pengumuman
            </div>

            <h2>Pengumuman untuk Siswa</h2>


            <a href="#" class="btn-info">
                Baca Selengkapnya →
            </a>

        </div>

        <div class="info-card">

            <div class="info-date">
                🏆 Prestasi
            </div>

            <h2>Prestasi Siswa SMKN 1 Cijati</h2>


            <a href="#" class="btn-info">
                Baca Selengkapnya →
            </a>

        </div>

    </div>

</div>

@endsection