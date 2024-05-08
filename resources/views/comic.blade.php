@extends('layouts.app')

@section('content')
    {{-- @dd($comic); --}}
    <div class="banner_m bg_primary">

    </div>
    <div class="container mt-5">
        <img class="comic_img" src="{{ $comic['thumb'] }}" alt="">
        <h1 class="text-uppercase my-3">{{ $comic['title'] }}</h1>
        <div class="green_banner  d-flex border-bottom border-dark">
            <div class="d-flex py-4  px-3 w-100 justify-content-between align-items-center text-white">

                <p class="m-0">U.S. Price: {{ $comic['price'] }}</p>
                <p class="m-0">AVAILABLE</p>

            </div>

        </div>

        <p class="py-4">{{ $comic['description'] }}</p>

    </div>

    <div class="greysection bg_lightgrey">
        <div class="container py-4 ">

            <h3>Specs</h3>

            <div class="py-2 d-flex border-top border-dark w-25 pe-5 justify-content-between">
                <strong class="m-0 me-4">Series</strong>
                <p class="m-0">{{ $comic['series'] }}</p>
            </div>

            <div class="py-2 d-flex  border-top border-dark w-25 pe-5 justify-content-between">
                <strong class="m-0 me-4">U.S. Price</strong>
                <p class="m-0">{{ $comic['price'] }}</p>
            </div>

            <div class=" py-2 d-flex  border-top border-bottom border-dark w-25 pe-5 justify-content-between">
                <strong class="m-0 me-4">On Sale Date</strong>
                <p class="m-0">{{ $comic['sale_date'] }}</p>
            </div>

        </div>

    </div>
@endsection
