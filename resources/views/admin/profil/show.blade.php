@extends('layouts.app')

@section('title', 'Detail Profil Sekolah')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

            <h2 class="fw-bold mb-4">
                Detail Profil Sekolah
            </h2>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Nama Sekolah</div>
                <div class="col-md-8">
                    {{ $profil->nama_sekolah }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">NPSN</div>
                <div class="col-md-8">
                    {{ $profil->npsn ?? '-' }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Alamat</div>
                <div class="col-md-8">
                    {{ $profil->alamat ?? '-' }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Telepon</div>
                <div class="col-md-8">
                    {{ $profil->telepon ?? '-' }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Email</div>
                <div class="col-md-8">
                    {{ $profil->email ?? '-' }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Website</div>
                <div class="col-md-8">
                    {{ $profil->website ?? '-' }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Kepala Sekolah</div>
                <div class="col-md-8">
                    {{ $profil->nama_kepala_sekolah ?? '-' }}
                </div>
            </div>

            <hr>

            <h5 class="fw-bold">Sejarah</h5>
            <p>{{ $profil->sejarah ?? '-' }}</p>

            <h5 class="fw-bold mt-4">Visi</h5>
            <p>{{ $profil->visi ?? '-' }}</p>

            <h5 class="fw-bold mt-4">Misi</h5>
            <p style="white-space: pre-line;">
                {{ $profil->misi ?? '-' }}
            </p>

            <div class="mt-4">

                <a href="{{ route('admin.profil.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <a href="{{ route('admin.profil.edit', $profil->id) }}"
                   class="btn btn-warning">
                    Edit
                </a>

            </div>

        </div>

    </div>

</div>

@endsection

