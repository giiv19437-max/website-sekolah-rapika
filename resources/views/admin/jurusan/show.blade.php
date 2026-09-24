@extends('layouts.app')

@section('title', 'Detail Jurusan')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">
                        Detail Jurusan
                    </h4>
                </div>

                <div class="card-body">

                    {{-- Gambar --}}
                    <div class="text-center mb-4">

                        @if($jurusan->gambar)

                            <img src="{{ asset('storage/' . $jurusan->gambar) }}"
                                 alt="{{ $jurusan->nama_jurusan }}"
                                 width="250"
                                 height="180"
                                 class="rounded border"
                                 style="object-fit: cover;">

                        @else

                            <div class="border rounded p-5 text-muted">
                                Tidak ada gambar
                            </div>

                        @endif

                    </div>

                    {{-- Nama Jurusan --}}
                    <div class="mb-3">

                        <label class="fw-bold">
                            Nama Jurusan
                        </label>

                        <div class="form-control bg-light">
                            {{ $jurusan->nama_jurusan }}
                        </div>

                    </div>

                    {{-- Singkatan --}}
                    <div class="mb-3">

                        <label class="fw-bold">
                            Singkatan
                        </label>

                        <div class="form-control bg-light">
                            {{ $jurusan->singkatan }}
                        </div>

                    </div>

                    {{-- Deskripsi --}}
                    <div class="mb-4">

                        <label class="fw-bold">
                            Deskripsi
                        </label>

                        <div class="form-control bg-light"
                             style="min-height: 120px;">

                            {{ $jurusan->deskripsi ?? 'Tidak ada deskripsi.' }}

                        </div>

                    </div>

                    {{-- Tombol --}}
                    <div class="d-flex gap-2">

                        <a href="{{ route('admin.jurusan.edit', $jurusan->id) }}"
                           class="btn btn-warning">
                            Edit
                        </a>

                        <a href="{{ route('admin.jurusan.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection