@extends('layouts.app')

@section('title', 'Edit Informasi')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

            <h2 class="fw-bold mb-4">
                Edit Informasi
            </h2>

            <form action="{{ route('admin.informasi.update', $artikel->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        Judul
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul', $artikel->judul) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Slug
                    </label>

                    <input type="text"
                           name="slug"
                           class="form-control"
                           value="{{ old('slug', $artikel->slug) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Kategori
                    </label>

                    <select name="kategori_artikel_id"
                            class="form-select">

                        @foreach($kategoris as $kategori)

                            <option value="{{ $kategori->id }}"
                                {{ $artikel->kategori_artikel_id == $kategori->id ? 'selected' : '' }}>

                                {{ $kategori->nama_kategori }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Isi Informasi
                    </label>

                    <textarea name="isi"
                              rows="8"
                              class="form-control">{{ old('isi', $artikel->isi) }}</textarea>
                </div>

                @if($artikel->gambar)

                    <div class="mb-3">

                        <label class="form-label">
                            Gambar Saat Ini
                        </label>

                        <br>

                        <img src="{{ asset('storage/' . $artikel->gambar) }}"
                             width="200"
                             class="rounded">

                    </div>

                @endif

                <div class="mb-4">

                    <label class="form-label">
                        Ganti Gambar
                    </label>

                    <input type="file"
                           name="gambar"
                           class="form-control">

                </div>

                <a href="{{ route('admin.informasi.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-dark">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>

@endsection