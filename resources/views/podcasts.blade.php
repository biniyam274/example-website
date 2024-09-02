@extends('layouts.app')

@section('title', 'Podcasts')

@section('content')
    <h1>My Podcasts</h1>
    <form action="{{ route('podcast.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="podcast" required>
        <button type="submit">Upload Podcast</button>
    </form>
    <!-- List uploaded podcasts -->
@endsection
