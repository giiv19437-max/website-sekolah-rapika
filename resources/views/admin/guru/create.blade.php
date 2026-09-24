@extends('layouts.app')

@section('title', 'Tambah Guru')

@section('content')

<div class="container py-5">

    <h2 class="mb-4">Tambah Guru</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.guru.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input type="text"
                           name="nip"
                           class="form-control"
                           value="{{ old('nip') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Guru</label>
                    <input type="text"
                           name="nama_guru"
                           class="form-control"
                           value="{{ old('nama_guru') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mata Pelajaran</label>
                    <input type="text"
                           name="mapel"
                           class="form-control"
                           value="{{ old('mapel') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file"
                           name="foto"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4">{{ old('deskripsi') }}</textarea>
                </div>

                <a href="{{ route('admin.guru.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>
    </div>

</div>

@endsection