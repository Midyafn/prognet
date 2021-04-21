@extends('layouts.app')

@section('content')


<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="{{asset('photos/header5.png')}}" class="d-block w-100" alt="...">
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

<div class="row">
 
	<div class="col-md-4 col-sm-12 mb-3">
		<div class="card">
			<img src="photos/rak_hitam.png" class="tengah" alt="...">
 
			<div class="card-body">
				<div class="card-title"><h4>Rak buku</h4></div>
			</div>
 
			<div class="card-footer">
				<a href=/products class="card-link">More</a>
			</div>
		</div>
	</div>
 
	<div class="col-md-4 col-sm-6 mb-3">
		<div class="card">
			<img src="photos/lampu_krem.png" class="card-img-top" alt="...">
 
			<div class="card-body">
				<div class="card-title"><h4>Lampu</h4></div>
			</div>
 
			<div class="card-footer">
				<a href=/products class="card-link">More</a>
			</div>
		</div>
	</div>

	<div class="col-md-4 col-sm-6 mb-3">
		<div class="card">
			<img src="photos/tanamanhias.png" class="card-img-top" alt="...">
 
			<div class="card-body">
				<div class="card-title"><h4>Tanaman tiruan</h4></div>
			</div>
 
			<div class="card-footer">
				<a href=/products class="card-link">More</a>
			</div>
		</div>
	</div>
 
</div>
@endsection


