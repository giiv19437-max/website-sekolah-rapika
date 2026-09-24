@extends('layouts.app')

@section('title', 'Detail Kontak - Admin')

@section('content')

<div class="container py-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Detail Pesan Kontak</h2>
            <p class="text-muted mb-0">
                Melihat detail pesan dari pengunjung sekolah.
            </p>
        </div>

        <a href="{{ route('admin.kontak.index') }}" class="btn btn-secondary">
            ← Kembali
        </a>
    </div>

    {{-- Detail Kontak --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="mb-3">
                <label class="fw-bold">Nama</label>
                <div class="form-control bg-light">
                    {{ $kontak->nama }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <div class="form-control bg-light">
                    {{ $kontak->email }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Subjek</label>
                <div class="form-control bg-light">
                    {{ $kontak->subjek }}
                </div>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Pesan</label>
                <div class="form-control bg-light" style="min-height: 120px;">
                    {{ $kontak->pesan }}
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('admin.kontak.edit', $kontak->id) }}"
                   class="btn btn-warning">
                    Edit
                </a>

                <a href="{{ route('admin.kontak.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </div>
    </div>

</div>

@endsection