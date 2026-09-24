@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p class="text-muted">
            Silakan kirim pertanyaan, saran, atau pesan kepada SMKN 1 Cijati.
        </p>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-8">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <form action="{{ route('kontak.store') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Nama
                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control"
                                value="{{ old('nama') }}"
                                placeholder="Masukkan nama kamu"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email') }}"
                                placeholder="Masukkan email kamu"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Subjek
                            </label>

                            <input
                                type="text"
                                name="subjek"
                                class="form-control"
                                value="{{ old('subjek') }}"
                                placeholder="Masukkan subjek pesan"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Pesan
                            </label>

                            <textarea
                                name="pesan"
                                class="form-control"
                                rows="6"
                                placeholder="Tulis pesan kamu..."
                                required
                            >{{ old('pesan') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-dark w-100">
                            Kirim Pesan
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>

</div>

@endsection