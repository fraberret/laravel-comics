@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>

<div class="products_section bg-dark">
    <div class=" container-sm py-5 position-relative">
        <span class="series position-absolute bg_primary px-3 py-2  text-white">CURRENT SERIES</span>
        <div class="row gy-3">
            @foreach ($products as $product)
            <div class="col-2 ">
                <div class="imgholder ">
                    <img class="card-img-top" src="{{$product['thumb']}}" alt="">
                </div>
                <p class="text-white text-uppercase">{{$product['title']}}</p>

            </div>
            @endforeach
        </div>
        <button class="position-absolute bottom-20 start-50 translate-middle-x bg_primary text-white px-5 py-2 border-0">LOAD MORE</button>
    </div>
</div>

<div class="bluebanner bg_primary">
    <div class="container py-3">

        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
        <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">

    </div>
</div>

@endsection