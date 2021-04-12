@extends('layouts.app')

@section('content')


<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="{{asset('photos/header2.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="{{asset('photos/header3.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="{{asset('photos/header4.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2">
        @foreach ($products as $product)
        <div class="col-md-2">
        <div class="card" style="width: 20rem;">
            <img src="{{ url('uploads')}}/ {{ $product->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $product->product_name}}</h5>
                <p class="card-text">Rp. {{ number_format($product->price)}}</p>
                <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
            </div> 
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
