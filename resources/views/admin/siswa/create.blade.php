@extends('layouts.app')

@section('title', 'Tambah Data Siswa - Admin')

@section('content')

<div class="container py-4">


<div class="mb-4">
    <h2 class="fw-bold mb-1">Tambah Data Siswa</h2>
    <p class="text-muted mb-0">
        Tambahkan jumlah siswa sekolah.
    </p>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('admin.siswa.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="jumlah_siswa" class="form-label fw-semibold">
                    Jumlah Siswa
                </label>

                <input
                    type="number"
                    name="jumlah_siswa"
                    id="jumlah_siswa"
                    class="form-control @error('jumlah_siswa') is-invalid @enderror"
                    value="{{ old('jumlah_siswa') }}"
                    min="0"
                    placeholder="Masukkan jumlah siswa"
                    required
                >

                @error('jumlah_siswa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('admin.siswa.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </div>

        </form>

    </div>
</div>


</div>

@endsection
