@extends('layouts.app')

@section('content')
<h1>HomePage</h1>

<div class="products_section bg-dark">

    <div class="container-sm py-5">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-2 ">
                <div class="imgholder ">
                    <img class="card-img-top" src="{{$product['thumb']}}" alt="">
                </div>
                <h5 class="text-white">{{$product['title']}}</h5>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection