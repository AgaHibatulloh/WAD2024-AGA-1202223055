@extends('layouts.main')
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh; background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center; background-size: cover;">
    <div class="card text-center shadow-lg" style="width: 24rem; background-color: rgba(255, 255, 255, 0.8);">
        <div class="card-body">
            <h1 class="display-4">{{ $nav }}</h1>
            <p class="lead">Website manajemen data dosen dan mahasiswa. 
            <hr class="my-4">
            <p>Manage your data efficiently and effectively.</p>
        </div>
    </div>
</div>
@endsection