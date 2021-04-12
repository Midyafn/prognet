@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2">
        @foreach ($products as $product)
        <div class="col-md-2">
        <div class="card" style="width: 20rem;">
            <img src="{{ url('uploads') }}/ {{ $products->images}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $product->product_name}}</h5>
                <p class="card-text">Rp. {{ number_format($product->price)}}</p>
                <a href="#" class="btn btn-primary">ADD TO CART</a>
                </div>
            </div>
            </div> 
        </div>
        @endforeach
        </div>
    </div>
</div>

@endsection