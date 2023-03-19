<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
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
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3>Belajar LARAVEL 8</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?start=649&amp;list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
