@extends('layouts.app')

@section('title', 'Edit Guru')

@section('content')

<div class="container py-5">

    <h2 class="mb-4">Edit Guru</h2>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.guru.update', $guru->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input type="text"
                           name="nip"
                           class="form-control"
                           value="{{ old('nip', $guru->nip) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Guru</label>
                    <input type="text"
                           name="nama_guru"
                           class="form-control"
                           value="{{ old('nama_guru', $guru->nama_guru) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mata Pelajaran</label>
                    <input type="text"
                           name="mapel"
                           class="form-control"
                           value="{{ old('mapel', $guru->mapel) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>

                    @if($guru->foto)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$guru->foto) }}"
                                 width="100"
                                 class="rounded">
                        </div>
                    @endif

                    <input type="file"
                           name="foto"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>

                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4">{{ old('deskripsi', $guru->deskripsi) }}</textarea>
                </div>

                <a href="{{ route('admin.guru.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    Update
                </button>

            </form>

        </div>
    </div>

</div>

@endsection