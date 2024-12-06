@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dosen_id">Dosen Wali</label>
            <select name="dosen_id" class="form-control" required>
                @foreach($dosens as $dosen)
                <option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection