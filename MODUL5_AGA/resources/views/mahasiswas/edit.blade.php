@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $mahasiswa->email }}" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <div class="form-group">
            <label for="dosen_id">Dosen Wali</label>
            <select name="dosen_id" class="form-control" required>
                @foreach($dosens as $dosen)
                <option value="{{ $dosen->id }}" {{ $mahasiswa->dosen_id == $dosen->id ? 'selected' : '' }}>{{ $dosen->nama_dosen }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection