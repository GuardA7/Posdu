@extends('layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Akun User</h1> 
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="../dashboard">Home</a></li>
        <li class="breadcrumb-item active">Tambah Akun User</li>
    </ol>
    <div class="card">
        <div class="card-header">
            <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Admin</span>
            <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Resset</button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <label for="" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="text" pattern="[A-Za-z0-9]{3,}" title="minimal 3 karakter kombinasi huruf besar huruf kecil dan angka" class="form-control border-0 border-bottom" id="username" name="username" maxlenght="20">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Nama</label>
                        <label for="" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama" maxlenght="20">
                        </div>
                    </div>
                </div>
                <div class="col-4 text-center px-4">
                    <img src="../admindb/assets/img/user.png" alt="gambar user" class="mb-3" width="40%">
                    <input type="file" name="image" class="form-control">
                    <small class="text-secondary">Pilih foto PNG, JPG atau JPEG dengan ukuran maksimal 1 MB</small>
                    <small class="text-secondary">Width = Height</small>
                </div>
            </div>
    </div>
@endsection