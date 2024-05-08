@extends('layouts.app')

@section('content')
    {{-- @dd($comic); --}}

    <div class="container">
        <img src="{{ $comic['thumb'] }}" alt="">
        {{ $comic['title'] }}
    </div>
@endsection
