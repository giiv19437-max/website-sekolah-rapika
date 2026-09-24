@extends('layouts.app')

@section('title', 'Data Siswa - Admin')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Siswa</h2>
            <p class="text-muted mb-0">
                Kelola jumlah siswa sekolah
            </p>
        </div>

        <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary">
            + Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">

                    <thead class="table-dark">
                        <tr>
                            <th width="100">No</th>
                            <th>Jumlah Siswa</th>
                            <th width="250">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($siswas as $siswa)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $siswa->jumlah_siswa }} siswa
                                </td>

                                <td>

                                    <a href="{{ route('admin.siswa.edit', $siswa->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.siswa.destroy', $siswa->id) }}"
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
                                <td colspan="3" class="text-center py-4">
                                    Belum ada data siswa.
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