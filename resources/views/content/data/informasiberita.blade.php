@extends('layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Informasi & Berita</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="../dashboard">Home</a></li>
            <li class="breadcrumb-item active">Tambah Informasi & Berita</li>
        </ol>
        <div class="card">
            <div class="card-header">
                <span class="h5 my-2"><i class="fa-solid fa-square-list"></i> Informasi & Berita</span>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#tambahinformasiberita">
                    + Informasi & Berita
                </button>

            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <Title></Title>
                                </th>
                                <th scope="col">Slug</th>
                                <th scope="col">Text</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>12 maret 2024</td>
                                <td>Otto</td>
                                <td>
                                    <!-- Button trigger modal update -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editinformasiberita">
                                        Edit
                                    </button>
                                    <!-- Button trigger modal edit -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapusinformasiberita">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Modal tambah jadwal-->
            <div class="modal fade" id="tambahinformasiberita" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="tambahinformasiberita" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="tambahinformasiberita">Tambah Jadwal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="\informasiberita" method="post">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">DD/MM/TTTT</label>
                                    <input type="date" name="date" class="form-control"
                                        placeholder="tanggal/bulan/tahun">
                                </div>
                                <div class="mb-3">
                                    <label for="tempat" class="form-label">Tempat</label>
                                    <input type="text" name="tempat" class="form-control" placeholder="Masukan tempat">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal update jadwal -->
            <div class="modal fade" id="editinformasiberita" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="editinformasiberita" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editinformasiberita">Edit Jadwal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="\informasiberita" method="get">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">DD/MM/TTTT</label>
                                    <input type="date" name="date" class="form-control"
                                        placeholder="tanggal/bulan/tahun">
                                </div>
                                <div class="mb-3">
                                    <label for="tempat" class="form-label">Tempat</label>
                                    <input type="text" name="tempat" class="form-control"
                                        placeholder="Masukan tempat">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-primary">Ya</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal hapus jadwal-->
            <div class="modal fade" id="hapusinformasiberita" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="hapusinformasiberita" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapusinformasiberita">Hapus Informasi & Berita</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Anda Yakin Ingin Menghapus Informasi & Berita ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-primary">Ya</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
