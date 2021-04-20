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
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal">
                        Description
                    </button>
                    <a href="{{ url('cart') }}/{{ $product->id }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add to cart</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ $product->description}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>

              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>


@endsection
