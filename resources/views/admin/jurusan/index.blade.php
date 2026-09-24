@extends('layouts.app')

@section('title', 'Kelola Jurusan')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">Kelola Jurusan</h2>
            <p class="text-muted">
                Kelola data jurusan sekolah
            </p>
        </div>

        <a href="{{ route('admin.jurusan.create') }}"
           class="btn btn-primary">
            + Tambah Jurusan
        </a>

    </div>

    {{-- Pesan berhasil --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Jurusan</th>
                            <th>Singkatan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($jurusans as $jurusan)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            {{-- Gambar --}}
                            <td>

                                @if($jurusan->gambar)

                                    <img src="{{ asset('storage/' . $jurusan->gambar) }}"
                                         width="100"
                                         height="70"
                                         style="object-fit: cover;"
                                         class="rounded">

                                @else

                                    <span class="text-muted">
                                        Tidak ada gambar
                                    </span>

                                @endif

                            </td>

                            {{-- Nama --}}
                            <td>
                                <strong>
                                    {{ $jurusan->nama_jurusan }}
                                </strong>
                            </td>

                            {{-- Singkatan --}}
                            <td>
                                <span class="badge bg-secondary">
                                    {{ $jurusan->singkatan }}
                                </span>
                            </td>

                            {{-- Deskripsi --}}
                            <td>
                                {{ $jurusan->deskripsi }}
                            </td>

                            {{-- Aksi --}}
                            <td>

                                {{-- TOMBOL EDIT --}}
                                <a href="{{ route('admin.jurusan.edit', $jurusan->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                {{-- TOMBOL HAPUS --}}
                                <form action="{{ route('admin.jurusan.destroy', $jurusan->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="6" class="text-center py-4">
                                Belum ada data jurusan.
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