@extends('template')

@section('title', 'Gallery')

@section('content')

    <h1>Gallery Page</h1>
    <p>This is gallery page. Please se all of our albums and pictures here. Hope you like them, thanks!</p>

    <ul>
        @foreach($albums as $album)
            <li>{{ $album }}</li>
        @endforeach
    </ul>
    <hr>

    <ul>
        @forelse($albums2 as $album2)
            <li>{{ $album2 }}</li>
        @empty
            <li>No albums available</li>
        @endforelse
    </ul>

@endsection