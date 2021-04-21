<?php

namespace App\Http\Controllers;

use App;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $names = Product::select('product_name')->groupBy('product_name')->get();
        $descriptions = Product::select('description')->groupBy('description')->get();
        $prices = Product::select('price')->groupBy('price')->get();
        $stocks = Product::select('stock')->groupBy('stock')->get();
        $images = Product::select('images')->groupBy('images')->get();
        return view('products.index',compact(['products']));
        
    }

    public function show(Product $product)
    {   
        $stocks = Stock::where('product_id','=',$product->id)
                     ->get([
                            'product_name',
                            'stocks',
                        ]);

        return view('products.show', compact ('product','stocks'));
    }


    public function list()
    {
        $products = Product::orderBy('id')->get();
        //dd($products);
        return view('admin.product', compact ('products'));
    }
}