@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')

<div class="container py-5">

    {{-- HEADER --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Ekstrakurikuler</h1>

        <p class="text-muted">
            Berbagai kegiatan ekstrakurikuler SMKN 1 Cijati
        </p>
    </div>


    {{-- DAFTAR EKSTRAKURIKULER --}}
    <div class="row g-4">

        @forelse ($ekskuls as $ekskul)

            <div class="col-md-6 col-lg-4">

                <div class="card h-100 shadow-sm border-0">

                    <div class="card-body">

                        {{-- NAMA --}}
                        <h4 class="card-title fw-bold">
                            {{ $ekskul->nama }}
                        </h4>


                        {{-- DESKRIPSI --}}
                        @if ($ekskul->deskripsi)

                            <p class="card-text text-muted">
                                {{ $ekskul->deskripsi }}
                            </p>

                        @endif


                        <hr>


                        {{-- JADWAL --}}
                        @if ($ekskul->jadwal)

                            <p>
                                <strong>📅 Jadwal:</strong><br>

                                {{ $ekskul->jadwal }}
                            </p>

                        @endif


                        {{-- TEMPAT --}}
                        @if ($ekskul->tempat)

                            <p>
                                <strong>📍 Tempat:</strong><br>

                                {{ $ekskul->tempat }}
                            </p>

                        @endif

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center">

                <div class="alert alert-info">
                    Data ekstrakurikuler belum tersedia.
                </div>

            </div>

        @endforelse

    </div>

</div>

@endsection