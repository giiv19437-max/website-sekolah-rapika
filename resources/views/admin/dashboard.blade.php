@extends('layouts.app')

@section('title', 'Dashboard Admin - SMKN 1 Cijati')

@section('content')

<style>
    .admin-dashboard {
        min-height: 100vh;
        padding: 50px 0;
        background: #f5f6f8;
    }

    .dashboard-title {
        font-weight: 700;
        color: #212529;
    }

    .dashboard-subtitle {
        color: #6c757d;
    }

    .admin-card {
        display: block;
        height: 100%;
        padding: 30px 20px;
        background: #fff;
        border-radius: 16px;
        text-decoration: none;
        color: #212529;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
        transition: all 0.25s ease;
    }

    .admin-card:hover {
        color: #212529;
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
    }

    .admin-icon {
        font-size: 45px;
        margin-bottom: 15px;
    }

    .admin-card h5 {
        font-weight: 700;
        margin-bottom: 8px;
    }

    .admin-card p {
        margin: 0;
        color: #6c757d;
        font-size: 14px;
    }

    .logout-button {
        border-radius: 10px;
        padding: 10px 25px;
    }
</style>

<div class="admin-dashboard">

```
<div class="container">

    {{-- HEADER --}}
    <div class="text-center mb-5">
        <h1 class="dashboard-title">
            🏫 Dashboard Admin
        </h1>

        <p class="dashboard-subtitle">
            Kelola data website SMKN 1 Cijati
        </p>
    </div>

    {{-- MENU --}}
    <div class="row g-4">

        {{-- PROFIL --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.profil.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">🏫</div>

                <h5>Profil</h5>

                <p>Kelola profil sekolah</p>
            </a>
        </div>

        {{-- SISWA --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.siswa.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">👨‍🎓</div>

                <h5>Siswa</h5>

                <p>Kelola jumlah siswa</p>
            </a>
        </div>

        {{-- GURU --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.guru.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">👨‍🏫</div>

                <h5>Guru</h5>

                <p>Kelola data guru</p>
            </a>
        </div>

        {{-- EKSKUL --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.ekskul.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">🎯</div>

                <h5>Ekskul</h5>

                <p>Kelola ekstrakurikuler</p>
            </a>
        </div>

        {{-- JURUSAN --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.jurusan.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">🎓</div>

                <h5>Jurusan</h5>

                <p>Kelola data jurusan</p>
            </a>
        </div>

        {{-- GALERI --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.galeri.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">🖼️</div>

                <h5>Galeri</h5>

                <p>Kelola foto galeri</p>
            </a>
        </div>

        {{-- INFORMASI --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.informasi.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">📰</div>

                <h5>Informasi</h5>

                <p>Kelola informasi sekolah</p>
            </a>
        </div>

        {{-- FASILITAS --}}
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('admin.fasilitas.index') }}"
               class="admin-card text-center">

                <div class="admin-icon">🏢</div>

                <h5>Fasilitas</h5>

                <p>Kelola fasilitas sekolah</p>
            </a>
        </div>

    </div>

    {{-- LOGOUT --}}
    <div class="text-center mt-5">

        <form action="{{ route('admin.logout') }}"
              method="POST"
              class="d-inline">

            @csrf

            <button type="submit"
                    class="btn btn-danger logout-button">
                Logout
            </button>

        </form>

    </div>

</div>

</div>

@endsection
