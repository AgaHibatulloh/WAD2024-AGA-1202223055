@extends('layouts.main')
@php

@section('content')
<div class="container">
    <h1>Edit Dosen</h1>
    <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_dosen">Kode Dosen</label>
            <input type="text" name="kode_dosen" class="form-control" value="{{ $dosen->kode_dosen }}" required>
        </div>
        <div class="form-group">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" value="{{ $dosen->nama_dosen }}" required>
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $dosen->email }}" required>
        </div>
        <div class="form-group">
            <label for="no_telepon">No Telepon</label>
            <input type="text" name="no_telepon" class="form-control" value="{{ $dosen->no_telepon }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection