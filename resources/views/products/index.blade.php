@extends('layouts.app')

@section('content')


    <div class="container">
    <div class="row justify-content-center">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $product->images }}" class="card-img-top" alt="...">
              <hr>
              <div class="card-body">
                <h5 class="card-title">{{ $product->product_name}}</h5>
                <strong>Price :</strong> Rp. {{ number_format($product->price)}} <br>
                <hr>
                    
                    <!-- Button details -->
                    <a href="{{ url('products/details') }}/{{ $product->id }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Detail</a>

              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>


<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 728b22dcc4aca534bf26b3277b05c80d6b73c425
