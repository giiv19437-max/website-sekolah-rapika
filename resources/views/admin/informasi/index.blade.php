@extends('layouts.app')

@section('title', 'Kelola Informasi')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold">Kelola Informasi</h1>
            <p class="text-muted">
                Kelola artikel dan informasi sekolah
            </p>
        </div>

        <div>
            <a href="{{ route('admin.informasi.kategori.index') }}"
               class="btn btn-secondary">
                Kategori
            </a>

            <a href="{{ route('admin.informasi.create') }}"
               class="btn btn-dark">
                + Tambah Informasi
            </a>
        </div>

    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Slug</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                    @forelse($artikels as $artikel)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                @if($artikel->gambar)

                                    <img src="{{ asset('storage/' . $artikel->gambar) }}"
                                         width="80"
                                         height="60"
                                         class="rounded"
                                         style="object-fit: cover;">

                                @else

                                    <span class="text-muted">
                                        Tidak ada
                                    </span>

                                @endif
                            </td>

                            <td class="fw-bold">
                                {{ $artikel->judul }}
                            </td>

                            <td>
                                {{ $artikel->kategori->nama_kategori ?? '-' }}
                            </td>

                            <td>
                                {{ $artikel->slug }}
                            </td>

                            <td class="text-nowrap">

                                <a href="{{ route('admin.informasi.show', $artikel->id) }}"
                                   class="btn btn-sm btn-info text-white">
                                    Lihat
                                </a>

                                <a href="{{ route('admin.informasi.edit', $artikel->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('admin.informasi.destroy', $artikel->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus informasi ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6"
                                class="text-center text-muted py-4">
                                Belum ada informasi.
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection