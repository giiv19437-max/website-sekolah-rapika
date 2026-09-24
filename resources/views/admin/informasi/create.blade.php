@extends('layouts.app')

@section('title', 'Tambah Informasi')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

            <h2 class="fw-bold mb-4">
                Tambah Informasi
            </h2>

            <form action="{{ route('admin.informasi.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Judul
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul') }}"
                           placeholder="Masukkan judul informasi">

                    @error('judul')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Slug
                    </label>

                    <input type="text"
                           name="slug"
                           class="form-control"
                           value="{{ old('slug') }}"
                           placeholder="Contoh: kegiatan-upacara-sekolah">

                    <small class="text-muted">
                        Kosongkan untuk membuat slug otomatis.
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Kategori
                    </label>

                    <select name="kategori_artikel_id"
                            class="form-select">

                        <option value="">
                            -- Pilih Kategori --
                        </option>

                        @foreach($kategoris as $kategori)

                            <option value="{{ $kategori->id }}"
                                {{ old('kategori_artikel_id') == $kategori->id ? 'selected' : '' }}>

                                {{ $kategori->nama_kategori }}

                            </option>

                        @endforeach

                    </select>

                    @error('kategori_artikel_id')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Isi Informasi
                    </label>

                    <textarea name="isi"
                              rows="8"
                              class="form-control"
                              placeholder="Tulis isi informasi...">{{ old('isi') }}</textarea>

                    @error('isi')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Gambar
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control">

                    <small class="text-muted">
                        JPG, JPEG, PNG, WEBP maksimal 2 MB.
                    </small>
                </div>

                <a href="{{ route('admin.informasi.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-dark">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection