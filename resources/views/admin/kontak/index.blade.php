@extends('layouts.app')

@section('title', 'Data Kontak - Admin')

@section('content')

<div class="container py-4">


{{-- Header --}}
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Data Kontak</h2>
        <p class="text-muted mb-0">
            Kelola pesan kontak dari pengunjung sekolah.
        </p>
    </div>

    <a href="{{ route('admin.kontak.create') }}" class="btn btn-primary">
        + Tambah Kontak
    </a>
</div>

{{-- Pesan sukses --}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

{{-- Error --}}
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Tabel Data Kontak --}}
<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($kontaks as $kontak)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <strong>{{ $kontak->nama }}</strong>
                            </td>

                            <td>
                                {{ $kontak->email }}
                            </td>

                            <td>
                                {{ $kontak->subjek }}
                            </td>

                            <td>
                                {{ Str::limit($kontak->pesan, 50) }}
                            </td>

                            <td>

                                {{-- Lihat --}}
                                <a href="{{ route('admin.kontak.show', $kontak->id) }}"
                                   class="btn btn-sm btn-info text-white">
                                    Lihat
                                </a>

                                {{-- Edit --}}
                                <a href="{{ route('admin.kontak.edit', $kontak->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                {{-- Hapus --}}
                                <form action="{{ route('admin.kontak.destroy', $kontak->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>

                                </form>

                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                Belum ada pesan kontak.
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
