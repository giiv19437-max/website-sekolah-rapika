@extends('layouts.app')

@section('title', 'Data Guru - Admin')

@section('content')

<div class="container py-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Guru</h2>
            <p class="text-muted mb-0">
                Kelola data guru sekolah
            </p>
        </div>

        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">
            + Tambah Guru
        </a>
    </div>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($gurus as $guru)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    @if($guru->foto)
                                        <img
                                            src="{{ asset('storage/' . $guru->foto) }}"
                                            alt="{{ $guru->nama_guru }}"
                                            width="60"
                                            height="60"
                                            class="rounded"
                                            style="object-fit: cover;"
                                        >
                                    @else
                                        <span class="text-muted">Tidak ada foto</span>
                                    @endif
                                </td>

                                <td>
                                    {{ $guru->nip ?? '-' }}
                                </td>

                                <td class="fw-semibold">
                                    {{ $guru->nama_guru }}
                                </td>

                                <td>
                                    {{ $guru->mapel }}
                                </td>

                                <td>

                                    <a href="{{ route('admin.guru.edit', $guru->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.guru.destroy', $guru->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data guru ini?')">
                                            Hapus
                                        </button>

                                    </form>

                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    Belum ada data guru.
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

