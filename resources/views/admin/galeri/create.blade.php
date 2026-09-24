@extends('layouts.app')

@section('title', 'Tambah Galeri')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Tambah Galeri</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.galeri.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Judul Galeri
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul') }}"
                        placeholder="Contoh: Kegiatan Upacara"
                        required
                    >

                    @error('judul')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Gambar
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control"
                        accept="image/*"
                        required
                    >

                    <small class="text-muted">
                        JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                    </small>

                    @error('gambar')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="5"
                        placeholder="Deskripsi foto..."
                    >{{ old('deskripsi') }}</textarea>

                </div>


                <div class="mb-4">

                    <label class="form-label">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control"
                        value="{{ old('tanggal') }}"
                    >

                </div>


                <a href="{{ route('admin.galeri.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    Simpan Galeri
                </button>

            </form>

        </div>

    </div>

</div>

@endsection