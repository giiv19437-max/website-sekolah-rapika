@extends('layouts.app')

@section('title', 'Tambah Ekstrakurikuler - SMKN 1 Cijati')

@section('content')

<div class="container py-5">

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Tambah Ekstrakurikuler</h2>
        <p class="text-muted mb-0">
            Tambahkan data ekstrakurikuler baru.
        </p>
    </div>

    <a href="{{ route('admin.ekskul.index') }}"
       class="btn btn-secondary">
        ← Kembali
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">

        {{-- ERROR VALIDASI --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>

                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.ekskul.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            {{-- NAMA EKSKUL --}}
            <div class="mb-3">
                <label for="nama_ekskul" class="form-label fw-semibold">
                    Nama Ekstrakurikuler
                </label>

                <input type="text"
                       name="nama_ekskul"
                       id="nama_ekskul"
                       class="form-control @error('nama_ekskul') is-invalid @enderror"
                       value="{{ old('nama_ekskul') }}"
                       placeholder="Contoh: Pramuka"
                       required>

                @error('nama_ekskul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- PEMBINA --}}
            <div class="mb-3">
                <label for="pembina" class="form-label fw-semibold">
                    Pembina
                </label>

                <input type="text"
                       name="pembina"
                       id="pembina"
                       class="form-control @error('pembina') is-invalid @enderror"
                       value="{{ old('pembina') }}"
                       placeholder="Nama pembina">

                @error('pembina')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- GURU --}}
            <div class="mb-3">
                <label for="guru_id" class="form-label fw-semibold">
                    Guru Pembina
                </label>

                <select name="guru_id"
                        id="guru_id"
                        class="form-select @error('guru_id') is-invalid @enderror">

                    <option value="">
                        -- Pilih Guru --
                    </option>

                    @foreach ($gurus as $guru)
                        <option value="{{ $guru->id }}"
                            {{ old('guru_id') == $guru->id ? 'selected' : '' }}>
                            {{ $guru->nama_guru }}
                        </option>
                    @endforeach

                </select>

                @error('guru_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- DESKRIPSI --}}
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-semibold">
                    Deskripsi
                </label>

                <textarea name="deskripsi"
                          id="deskripsi"
                          rows="5"
                          class="form-control @error('deskripsi') is-invalid @enderror"
                          placeholder="Masukkan deskripsi ekstrakurikuler...">{{ old('deskripsi') }}</textarea>

                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- LOGO --}}
            <div class="mb-4">
                <label for="logo" class="form-label fw-semibold">
                    Logo Ekstrakurikuler
                </label>

                <input type="file"
                       name="logo"
                       id="logo"
                       class="form-control @error('logo') is-invalid @enderror"
                       accept="image/*">

                <small class="text-muted">
                    Format JPG, JPEG, PNG. Maksimal 2 MB.
                </small>

                @error('logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- BUTTON --}}
            <div class="d-flex gap-2">

                <button type="submit"
                        class="btn btn-primary px-4">
                    💾 Simpan
                </button>

                <a href="{{ route('admin.ekskul.index') }}"
                   class="btn btn-secondary px-4">
                    Batal
                </a>

            </div>

        </form>

    </div>
</div>

</div>

@endsection
