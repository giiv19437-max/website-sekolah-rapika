@extends('layouts.app')

@section('title', 'Kelola Profil Sekolah')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Profil Sekolah</h2>
            <p class="text-muted mb-0">
                Kelola informasi profil sekolah
            </p>
        </div>

        <a href="{{ route('admin.profil.create') }}"
           class="btn btn-primary">
            + Tambah Profil
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($profils->count() > 0)

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th width="60">No</th>
                                <th>Nama Sekolah</th>
                                <th>NPSN</th>
                                <th>Kepala Sekolah</th>
                                <th width="250">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($profils as $profil)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    {{ $profil->nama_sekolah }}
                                </td>

                                <td>
                                    {{ $profil->npsn ?? '-' }}
                                </td>

                                <td>
                                    {{ $profil->nama_kepala_sekolah ?? '-' }}
                                </td>

                                <td>

                                    <a href="{{ route('admin.profil.show', $profil->id) }}"
                                       class="btn btn-info btn-sm text-white">
                                        Lihat
                                    </a>

                                    <a href="{{ route('admin.profil.edit', $profil->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.profil.destroy', $profil->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus profil ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>

                                    </form>

                                </td>
                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    @else

        <div class="alert alert-info">
            Belum ada data profil sekolah.
        </div>

    @endif

</div>

@endsection

