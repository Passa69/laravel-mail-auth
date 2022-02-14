@extends('layouts.main-layout')
@section('content')

    <br>
    <ul>
        @foreach ($videos as $video)
            <li>
                {{ $video -> title }}
                - {{ $video -> subtitle }}
                - {{ $video -> rating }}
                -- <a href="{{ route('delete', $video -> id) }}">DELETE</a><br>
            </li>
        @endforeach
    </ul>
@endsection