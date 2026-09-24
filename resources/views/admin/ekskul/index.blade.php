@extends('layouts.app')

@section('title', 'Kelola Ekstrakurikuler')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold">Kelola Ekstrakurikuler</h1>
            <p class="text-muted">
                Kelola data ekstrakurikuler sekolah.
            </p>
        </div>

        <a href="{{ route('admin.ekskul.create') }}"
           class="btn btn-primary">
            + Tambah Ekskul
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

                <table class="table table-bordered align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th width="60">No</th>
                            <th width="100">Logo</th>
                            <th>Nama Ekskul</th>
                            <th>Pembina</th>
                            <th>Deskripsi</th>
                            <th width="250">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($ekskuls as $ekskul)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    @if($ekskul->logo)
                                        <img
                                            src="{{ asset('storage/' . $ekskul->logo) }}"
                                            width="70"
                                            height="70"
                                            style="object-fit: cover;"
                                            class="rounded"
                                            alt="{{ $ekskul->nama_ekskul }}"
                                        >
                                    @else
                                        <span class="text-muted">
                                            Tidak ada
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    <strong>
                                        {{ $ekskul->nama_ekskul }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $ekskul->guru->nama_guru ?? '-' }}
                                </td>

                                <td>
                                    {{ Str::limit($ekskul->deskripsi, 80) }}
                                </td>

                                <td>

                                    <a href="{{ route('admin.ekskul.show', $ekskul->id) }}"
                                       class="btn btn-info btn-sm">
                                        Lihat
                                    </a>

                                    <a href="{{ route('admin.ekskul.edit', $ekskul->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.ekskul.destroy', $ekskul->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus ekskul ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="6"
                                    class="text-center py-4">
                                    Belum ada data ekstrakurikuler.
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