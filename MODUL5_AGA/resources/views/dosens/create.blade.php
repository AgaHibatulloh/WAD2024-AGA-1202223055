@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Tambah Dosen</h1>
    <form action="{{ route('dosens.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_dosen">Kode Dosen</label>
            <input type="text" name="kode_dosen" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_telepon">No Telepon</label>
            <input type="text" name="no_telepon" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection