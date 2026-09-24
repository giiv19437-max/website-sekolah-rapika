@extends('layouts.app')

@section('title', 'Edit Kontak - Admin')

@section('content')

<div class="container py-4">

    <div class="mb-4">
        <h2 class="fw-bold">Edit Kontak</h2>
        <p class="text-muted">
            Perbarui data pesan kontak.
        </p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('kontak.update', $kontak->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                {{-- Nama --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama
                    </label>

                    <input type="text"
                           name="nama"
                           class="form-control @error('nama') is-invalid @enderror"
                           value="{{ old('nama', $kontak->nama) }}">

                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email', $kontak->email) }}">

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Subjek --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Subjek
                    </label>

                    <input type="text"
                           name="subjek"
                           class="form-control @error('subjek') is-invalid @enderror"
                           value="{{ old('subjek', $kontak->subjek) }}">

                    @error('subjek')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Pesan --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Pesan
                    </label>

                    <textarea name="pesan"
                              rows="5"
                              class="form-control @error('pesan') is-invalid @enderror">{{ old('pesan', $kontak->pesan) }}</textarea>

                    @error('pesan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Tombol --}}
                <div class="d-flex gap-2">

                    <a href="{{ route('kontak.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Update
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection

