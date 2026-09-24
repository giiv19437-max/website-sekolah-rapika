@extends('layouts.app')

@section('title', 'Tambah Jurusan')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Jurusan</h4>
                </div>

                <div class="card-body">

                    {{-- Error Validasi --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.jurusan.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        {{-- Nama Jurusan --}}
                        <div class="mb-3">
                            <label for="nama_jurusan" class="form-label">
                                Nama Jurusan
                            </label>

                            <input type="text"
                                   id="nama_jurusan"
                                   name="nama_jurusan"
                                   class="form-control"
                                   value="{{ old('nama_jurusan') }}"
                                   placeholder="Contoh: Pengembangan Perangkat Lunak dan Gim"
                                   required>
                        </div>

                        {{-- Singkatan --}}
                        <div class="mb-3">
                            <label for="singkatan" class="form-label">
                                Singkatan
                            </label>

                            <input type="text"
                                   id="singkatan"
                                   name="singkatan"
                                   class="form-control"
                                   value="{{ old('singkatan') }}"
                                   placeholder="Contoh: PPLG"
                                   required>
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">
                                Deskripsi
                            </label>

                            <textarea id="deskripsi"
                                      name="deskripsi"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Masukkan deskripsi jurusan...">{{ old('deskripsi') }}</textarea>
                        </div>

                        {{-- Gambar --}}
                        <div class="mb-4">
                            <label for="gambar" class="form-label">
                                Gambar Jurusan
                            </label>

                            <input type="file"
                                   id="gambar"
                                   name="gambar"
                                   class="form-control"
                                   accept="image/*">

                            <small class="text-muted">
                                JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            </small>
                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex gap-2">

                            <button type="submit"
                                    class="btn btn-primary">
                                Simpan
                            </button>

                            <a href="{{ route('admin.jurusan.index') }}"
                               class="btn btn-secondary">
                                Kembali
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection