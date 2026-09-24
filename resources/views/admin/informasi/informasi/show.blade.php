@extends('layouts.app')

@section('title', 'Detail Galeri')

@section('content')

<div class="container py-5">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-dark text-white">

            <h4 class="mb-0">
                Detail Galeri
            </h4>

        </div>


        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    @if($galeri->gambar)

                        <img
                            src="{{ asset('storage/' . $galeri->gambar) }}"
                            class="img-fluid rounded shadow-sm"
                            alt="{{ $galeri->judul }}"
                        >

                    @else

                        <div class="alert alert-secondary">
                            Tidak ada gambar.
                        </div>

                    @endif

                </div>


                <div class="col-md-6">

                    <h2 class="fw-bold">
                        {{ $galeri->judul }}
                    </h2>


                    @if($galeri->tanggal)

                        <p class="text-muted">
                            Tanggal: {{ $galeri->tanggal }}
                        </p>

                    @endif


                    <hr>


                    <h5>
                        Deskripsi
                    </h5>

                    <p>
                        {{ $galeri->deskripsi ?? 'Tidak ada deskripsi.' }}
                    </p>


                    <a
                        href="{{ route('admin.galeri.edit', $galeri->id) }}"
                        class="btn btn-warning"
                    >
                        Edit
                    </a>

                    <a
                        href="{{ route('admin.galeri.index') }}"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection