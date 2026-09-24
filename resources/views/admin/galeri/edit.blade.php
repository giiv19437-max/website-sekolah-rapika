@extends('layouts.app')

@section('title', 'Edit Galeri')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Edit Galeri</h4>
        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.galeri.update', $galeri->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')


                <div class="mb-3">

                    <label class="form-label">
                        Judul Galeri
                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ old('judul', $galeri->judul) }}"
                        required
                    >

                </div>


                @if($galeri->gambar)

                    <div class="mb-3">

                        <label class="form-label">
                            Gambar Saat Ini
                        </label>

                        <br>

                        <img
                            src="{{ asset('storage/' . $galeri->gambar) }}"
                            alt="{{ $galeri->judul }}"
                            width="250"
                            height="170"
                            style="object-fit: cover;"
                            class="rounded shadow-sm"
                        >

                    </div>

                @endif


                <div class="mb-3">

                    <label class="form-label">
                        Ganti Gambar
                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control"
                        accept="image/*"
                    >

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti gambar.
                    </small>

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="5"
                    >{{ old('deskripsi', $galeri->deskripsi) }}</textarea>

                </div>


                <div class="mb-4">

                    <label class="form-label">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control"
                        value="{{ old('tanggal', $galeri->tanggal) }}"
                    >

                </div>


                <a href="{{ route('admin.galeri.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-primary">
                    Update Galeri
                </button>

            </form>

        </div>

    </div>

</div>

@endsection