@extends('layouts.app')

@section('title', 'Edit Profil Sekolah')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

            <h2 class="fw-bold mb-4">
                Edit Profil Sekolah
            </h2>

            <form action="{{ route('admin.profil.update', $profil->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Sekolah</label>
                    <input type="text"
                           name="nama_sekolah"
                           class="form-control"
                           value="{{ old('nama_sekolah', $profil->nama_sekolah) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NPSN</label>
                    <input type="text"
                           name="npsn"
                           class="form-control"
                           value="{{ old('npsn', $profil->npsn) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat"
                              class="form-control"
                              rows="3">{{ old('alamat', $profil->alamat) }}</textarea>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text"
                               name="telepon"
                               class="form-control"
                               value="{{ old('telepon', $profil->telepon) }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email', $profil->email) }}">
                    </div>

                </div>

                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text"
                           name="website"
                           class="form-control"
                           value="{{ old('website', $profil->website) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Kepala Sekolah</label>
                    <input type="text"
                           name="nama_kepala_sekolah"
                           class="form-control"
                           value="{{ old('nama_kepala_sekolah', $profil->nama_kepala_sekolah) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Sejarah</label>
                    <textarea name="sejarah"
                              class="form-control"
                              rows="5">{{ old('sejarah', $profil->sejarah) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Visi</label>
                    <textarea name="visi"
                              class="form-control"
                              rows="4">{{ old('visi', $profil->visi) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Misi</label>
                    <textarea name="misi"
                              class="form-control"
                              rows="5">{{ old('misi', $profil->misi) }}</textarea>
                </div>

                <a href="{{ route('admin.profil.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    Update Profil
                </button>

            </form>

        </div>

    </div>

</div>

@endsection

