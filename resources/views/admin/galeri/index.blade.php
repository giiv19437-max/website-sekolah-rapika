@extends('layouts.app')

@section('title', 'Kelola Galeri')

@section('content')

<div class="container py-5">



<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

    <div>
        <h2 class="fw-bold mb-1">Kelola Galeri</h2>
        <p class="text-muted mb-0">
            Kelola foto kegiatan dan dokumentasi sekolah.
        </p>
    </div>

    <div class="d-flex gap-2">

        <a href="{{ route('admin.dashboard') }}"
           class="btn btn-secondary">
            🏠 Dashboard
        </a>

        <a href="{{ route('admin.galeri.create') }}"
           class="btn btn-primary">
            ➕ Tambah Galeri
        </a>

    </div>

</div>



@if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
        </button>
    </div>

@endif



<div class="card shadow-sm border-0">

    <div class="card-body">

        @if($galeris->count())

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle mb-0">

                    <thead class="table-dark">

                        <tr>
                            <th width="60">No</th>
                            <th width="140">Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th width="130">Tanggal</th>
                            <th width="230" class="text-center">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($galeris as $galeri)

                            <tr>

                                
                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>


                                
                                <td class="text-center">

                                    @if($galeri->gambar)

                                        <img
                                            src="{{ asset('storage/' . $galeri->gambar) }}"
                                            alt="{{ $galeri->judul }}"
                                            width="110"
                                            height="75"
                                            class="rounded shadow-sm"
                                            style="object-fit: cover;"
                                        >

                                    @else

                                        <span class="text-muted">
                                            Tidak ada gambar
                                        </span>

                                    @endif

                                </td>


                                
                                <td>
                                    <strong>
                                        {{ $galeri->judul }}
                                    </strong>
                                </td>


                               
                                <td>
                                    {{ $galeri->deskripsi ?? '-' }}
                                </td>


                              
                                <td>
                                    {{ $galeri->tanggal ?? '-' }}
                                </td>


                                
                                <td>

                                    <div class="d-flex justify-content-center gap-1 flex-wrap">

                                       
                                        <a href="{{ route('admin.galeri.show', $galeri->id) }}"
                                           class="btn btn-sm btn-info text-white">
                                            👁️ Lihat
                                        </a>


                                       
                                        <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                           class="btn btn-sm btn-warning">
                                            ✏️ Edit
                                        </a>


                                     
                                        <form
                                            action="{{ route('admin.galeri.destroy', $galeri->id) }}"
                                            method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin ingin menghapus galeri ini?')"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-danger">
                                                🗑️ Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            
            <div class="text-center py-5">

                <div style="font-size: 50px;">
                    🖼️
                </div>

                <h5 class="mt-3">
                    Belum ada data galeri
                </h5>

                <p class="text-muted">
                    Silakan tambahkan foto galeri sekolah.
                </p>

                <a href="{{ route('admin.galeri.create') }}"
                   class="btn btn-primary">
                    ➕ Tambah Galeri
                </a>

            </div>

        @endif

    </div>

</div>


</div>

@endsection
