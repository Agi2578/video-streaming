<!DOCTYPE html>
<html lang="en">
<head>
@extends('layouts.app')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Video List</h1>
            <a href="{{ route('videos.create') }}" class="btn btn-primary">Upload Video</a>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <h3>Belajar LARAVEL 8</h3>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/videoseries?start=649&amp;list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <table class="table table-bordered mt-5">
                <thead>
                <tbody>
                    @foreach($videos as $video)
                    <tr>
                        <td>{{ $video->name }}</td>
                        <td>
                            <video width="320" height="240" controls>
                                <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </td>
                        <td>
                            <a href="{{ route('videos.show', $video->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                            class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
    </div>
</div>
</div>
@endsection
</body>
</html>