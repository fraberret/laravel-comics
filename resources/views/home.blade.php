@extends('layouts.app')

@section('content')
<h1>HomePage</h1>

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{$product['thumb']}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection