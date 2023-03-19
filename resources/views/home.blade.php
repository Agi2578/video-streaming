@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Dashboard</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center shadow h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Daftar Video</h5>
                            <p class="card-text">Lihat dan kelola daftar video yang telah diunggah.</p>
                            <a href="{{ route('videos.index') }}" class="btn btn-primary mt-auto">Lihat Daftar Video</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center shadow h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Tambah Video Baru</h5>
                            <p class="card-text">Unggah video baru dan tambahkan ke daftar.</p>
                            <a href="{{ route('videos.create') }}" class="btn btn-success mt-auto">Tambah Video Baru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
