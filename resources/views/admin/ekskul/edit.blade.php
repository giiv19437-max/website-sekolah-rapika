@extends('layouts.app')

@section('title', 'Edit Ekskul')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm">

        <div class="card-body">

            <h2 class="fw-bold mb-4">
                Edit Ekstrakurikuler
            </h2>

            <form action="{{ route('admin.ekskul.update', $ekskul->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        Nama Ekskul
                    </label>

                    <input type="text"
                           name="nama_ekskul"
                           class="form-control"
                           value="{{ old('nama_ekskul', $ekskul->nama_ekskul) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Pembina
                    </label>

                    <select name="guru_id"
                            class="form-select">

                        <option value="">
                            -- Pilih Guru Pembina --
                        </option>

                        @foreach($gurus as $guru)

                            <option value="{{ $guru->id }}"
                                {{ old('guru_id', $ekskul->guru_id) == $guru->id ? 'selected' : '' }}>

                                {{ $guru->nama_guru }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              class="form-control"
                              rows="5">{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
                </div>

                @if($ekskul->logo)

                    <div class="mb-3">

                        <label class="form-label">
                            Logo Saat Ini
                        </label>

                        <br>

                        <img
                            src="{{ asset('storage/' . $ekskul->logo) }}"
                            width="120"
                            class="rounded mb-2"
                            alt="{{ $ekskul->nama_ekskul }}"
                        >

                    </div>

                @endif

                <div class="mb-4">
                    <label class="form-label">
                        Ganti Logo
                    </label>

                    <input type="file"
                           name="logo"
                           class="form-control"
                           accept="image/*">
                </div>

                <a href="{{ route('admin.ekskul.index') }}"
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