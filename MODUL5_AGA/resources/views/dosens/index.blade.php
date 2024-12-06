@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Daftar Dosen</h1>
    <a href="{{ route('dosens.create') }}" class="btn btn-primary">Tambah Dosen</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>NIP</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
            <tr>
                <td>{{ $dosen->kode_dosen }}</td>
                <td>{{ $dosen->nama_dosen }}</td>
                <td>{{ $dosen->nip }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->no_telepon }}</td>
                <td>
                    <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection