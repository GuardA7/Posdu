@extends('layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Jadwal Posyandu</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="../dashboard">Home</a></li>
            <li class="breadcrumb-item active">Tambah Jadwal Posyandu</li>
        </ol>
        @if (session()->has('create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('create') }}
                <button type="create" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('update') }}
                <button type="update" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('delete'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('delete') }}
                <button type="delete" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <span class="h5 my-2"><i class="bi bi-list-ul"></i> Jadwal Posyandu</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#tambahjadwal">
                    + Tambah Jadwal
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Acara</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <th scope="row">{{ $schedule->id }}</th>
                                    <td>{{ $schedule->tanggal }}</td>
                                    <td>{{ $schedule->tempat }}</td>
                                    <td>{{ $schedule->acara }}</td>
                                    <td>
                                        <!-- Button trigger modal update -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editjadwal" data-id="{{ $schedule->id }}">
                                            Edit
                                        </button>
                                        <!-- Button trigger modal edit -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapusjadwal" data-id="{{ $schedule->id }}">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal tambah jadwal-->
    <div class="modal fade" id="tambahjadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="tambahjadwalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahjadwalLabel">Tambah Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('jadwalposyandu.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" name="tempat" class="form-control" placeholder="Masukkan tempat">
                        </div>
                        <div class="mb-3">
                            <label for="acara" class="form-label">Acara Kegiatan</label>
                            <input type="text" name="acara" class="form-control" placeholder="Masukkan acara kegiatan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal update jadwal -->
    <div class="modal fade" id="editjadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editjadwal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editjadwal">Edit Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jadwalposyandu.update', $schedule->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">DD/MM/TTTT</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="tanggal/bulan/tahun"
                                required value="{{ $schedule->tanggal }}">
                        </div>
                        <div class="mb-3">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" name="tempat" class="form-control" placeholder="Masukan tempat"
                                required value="{{ $schedule->tempat }}">
                        </div>
                        <div class="mb-3">
                            <label for="acara" class="form-label">Acara Kegiatan</label>
                            <input type="text" name="acara" class="form-control"
                                placeholder="Masukan acara kegiatan" required value="{{ $schedule->acara }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal hapus jadwal-->
    <div class="modal fade" id="hapusjadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="hapusjadwal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hapusjadwal">Hapus Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('jadwalposyandu.destroy', $schedule->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        Anda Yakin Ingin Menghapus Jadwal ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
