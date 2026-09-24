@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')

<div class="container py-5">

    {{-- HEADER --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Ekstrakurikuler</h1>
        <p class="text-muted">
            Berbagai kegiatan ekstrakurikuler yang tersedia di SMKN 1 Cijati
        </p>
    </div>

    {{-- DAFTAR EKSTRAKURIKULER --}}
    <div class="row g-4">

        @forelse ($eskuls as $eskul)

            <div class="col-md-6 col-lg-4">

                <div class="card h-100 border-0 shadow-sm overflow-hidden">

                    {{-- LOGO / GAMBAR ESKUL --}}
                    @if ($eskul->logo)

                        <img
                            src="{{ asset('storage/' . $eskul->logo) }}"
                            class="card-img-top"
                            alt="{{ $eskul->nama_ekskul }}"
                            style="height: 250px; object-fit: cover;"
                        >

                    @else

                        <div
                            class="d-flex align-items-center justify-content-center bg-light"
                            style="height: 250px;"
                        >
                            <span class="text-muted">
                                Tidak ada logo
                            </span>
                        </div>

                    @endif

                    {{-- INFORMASI ESKUL --}}
                    <div class="card-body">

                        <h5 class="fw-bold mb-2">
                            {{ $eskul->nama_ekskul }}
                        </h5>

                        {{-- PEMBINA --}}
                        <p class="mb-2">
                            <strong>Pembina:</strong>
                            @if ($eskul->guru)
                                {{ $eskul->guru->nama_guru }}
                            @else
                                Belum ditentukan
                            @endif
                        </p>

                        {{-- DESKRIPSI --}}
                        <p class="text-muted mb-0">
                            {{ $eskul->deskripsi ?? 'Belum ada deskripsi ekstrakurikuler.' }}
                        </p>

                    </div>

                </div>

            </div>

        @empty

            {{-- JIKA DATA KOSONG --}}
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Belum ada data ekstrakurikuler.
                </div>
            </div>

        @endforelse

    </div>

</div>

@endsection