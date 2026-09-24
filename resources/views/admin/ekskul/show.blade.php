@extends('layouts.app')

@section('title', 'Detail Ekstrakurikuler')

@section('content')

<div class="container py-5">


<div class="card shadow-sm">

    <div class="card-body p-4">

        {{-- JUDUL --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">
                    Detail Ekstrakurikuler
                </h2>

                <p class="text-muted mb-0">
                    Informasi lengkap ekstrakurikuler
                </p>
            </div>

            <a href="{{ route('admin.ekskul.index') }}"
               class="btn btn-secondary">
                ← Kembali
            </a>
        </div>


        {{-- LOGO --}}
        <div class="text-center mb-4">

            @if($ekskul->logo)

                <img
                    src="{{ asset('storage/' . $ekskul->logo) }}"
                    alt="{{ $ekskul->nama_ekskul }}"
                    class="rounded shadow-sm"
                    style="width: 180px; height: 180px; object-fit: cover;"
                >

            @else

                <div class="border rounded p-5 text-muted">
                    Tidak ada logo ekskul
                </div>

            @endif

        </div>


        {{-- DATA EKSKUL --}}
        <div class="row">

            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Nama Ekstrakurikuler
                </label>

                <div class="form-control bg-light">
                    {{ $ekskul->nama_ekskul }}
                </div>

            </div>


            <div class="col-md-6 mb-3">

                <label class="fw-bold">
                    Guru Pembina
                </label>

                <div class="form-control bg-light">
                    {{ $ekskul->guru->nama_guru ?? '-' }}
                </div>

            </div>


            <div class="col-12 mb-4">

                <label class="fw-bold">
                    Deskripsi
                </label>

                <div class="border rounded p-3 bg-light">

                    @if($ekskul->deskripsi)

                        {{ $ekskul->deskripsi }}

                    @else

                        <span class="text-muted">
                            Belum ada deskripsi.
                        </span>

                    @endif

                </div>

            </div>

        </div>


        {{-- TOMBOL --}}
        <div class="d-flex gap-2">

            <a href="{{ route('admin.ekskul.edit', $ekskul->id) }}"
               class="btn btn-warning">
                ✏️ Edit
            </a>

            <form
                action="{{ route('admin.ekskul.destroy', $ekskul->id) }}"
                method="POST"
                onsubmit="return confirm('Yakin ingin menghapus ekskul ini?')">

                @csrf
                @method('DELETE')

                <button type="submit"
                        class="btn btn-danger">
                    🗑️ Hapus
                </button>

            </form>

        </div>

    </div>

</div>


</div>

@endsection
