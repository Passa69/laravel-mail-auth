@extends('layouts.main-layout')
@section('content')

    {{-- <br>
    <ul>
        @foreach ($videos as $video)
            <li>
                {{ $video -> title }}
                - {{ $video -> subtitle }}
                - {{ $video -> rating }}

                @auth
                    -- <a href="{{ route('delete', $video -> id) }}">DELETE</a><br>
                @endauth
            </li>
        @endforeach
    </ul> --}}

    <video-component user="{{ Auth::check() }}"></video-component>
@endsection