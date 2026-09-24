@extends('layouts.app')

@section('title', 'Edit Jurusan')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-warning">
                    <h4 class="mb-0">Edit Data Jurusan</h4>
                </div>

                <div class="card-body">

                    {{-- Pesan Error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.jurusan.update', $jurusan->id) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        {{-- Nama Jurusan --}}
                        <div class="mb-3">

                            <label for="nama_jurusan" class="form-label">
                                Nama Jurusan
                            </label>

                            <input type="text"
                                   id="nama_jurusan"
                                   name="nama_jurusan"
                                   class="form-control"
                                   value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}"
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
                                   value="{{ old('singkatan', $jurusan->singkatan) }}"
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
                                      rows="5">{{ old('deskripsi', $jurusan->deskripsi) }}</textarea>

                        </div>

                        {{-- Gambar Lama --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Gambar Saat Ini
                            </label>

                            <div>
                                @if ($jurusan->gambar)

                                    <img src="{{ asset('storage/' . $jurusan->gambar) }}"
                                         alt="{{ $jurusan->nama_jurusan }}"
                                         width="180"
                                         height="120"
                                         class="rounded border"
                                         style="object-fit: cover;">

                                @else

                                    <p class="text-muted">
                                        Belum ada gambar.
                                    </p>

                                @endif
                            </div>

                        </div>

                        {{-- Ganti Gambar --}}
                        <div class="mb-4">

                            <label for="gambar" class="form-label">
                                Ganti Gambar
                            </label>

                            <input type="file"
                                   id="gambar"
                                   name="gambar"
                                   class="form-control"
                                   accept="image/*">

                            <small class="text-muted">
                                Kosongkan jika tidak ingin mengganti gambar.
                            </small>

                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex gap-2">

                            <button type="submit"
                                    class="btn btn-warning">
                                Update
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