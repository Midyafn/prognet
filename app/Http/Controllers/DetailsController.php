<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
Use App\Product;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $products = Product::where('id',$id)->first();

        return view('products/details', compact('products'));
    }
}
