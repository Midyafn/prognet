<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
Use App\Product;
Use App\Transaction;
Use App\TransactionDetail;
Use Illuminate\Http\Request;
Use Auth;



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
    public function cart(Request $request,$id)
    {
        $products = Product::where('id', $id)->first();
        $date = date('Y-m-d H:i:s');

        //validasi apakah melebihi stok
    	if($request->qty > $products->stock)
    	{
    		return redirect('product'.$id);
    	}

        //validasi
        $cek = Transaction::where('user_id', Auth::user()->id)->where('status',0)->first();
        //menyimpan database ke transaksi
        if(empty($cek))
    	{
            $transactions = new Transaction;
            $transactions->user_id = Auth::user()->id;
            $transactions->date = $date;
            $transactions->status = 0;
            $transactions->save();
        
        }  

        //simpan ke database detail transaksi
            $new_transaction = Transaction::where('user_id', Auth::user()->id)->where('status',0)->first();        

            $transaction_details = new TransactionDetail;
            $transaction_details->product_id = $products->id;
            $transaction_details->transaction_id = $new_transaction->id;
            $transaction_details->qty = $request->qty;
            $transaction_details->total_price = $products->price*$request->qty;
            $transaction_details->save();  
    
        return redirect('products');
        }
    
}
