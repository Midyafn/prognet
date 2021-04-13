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


@endsection
