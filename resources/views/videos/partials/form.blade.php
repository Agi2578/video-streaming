@extends('layouts.app')

@section('content')
<div class="form-group">
    <label for="name">Nama File</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $video->name ?? '') }}" required>
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="video">Upload Video</label>
    <input type="file" class="form-control-file" id="video" name="video" {{ $required ?? '' }}>
    @error('video')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
@endsection