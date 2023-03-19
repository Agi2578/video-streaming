@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $video->name }}</h1>
            <video width="100%" controls>
                <source src="{{ Storage::url($video->path) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <br><br>
            <a href="{{ route('videos.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
