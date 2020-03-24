<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan semua row product
        $products = DB::table('Products')->get();
        return view('product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
    		'category_id' => 'required',
    		'product_name' => 'required',
    		'product_price' => 'required',
    		'product_stock' => 'required',
    		'explanation' => 'required',
    	]);
 
        Product::create([
    		'category_id' => $request->category_id,
    		'product_name' => $request->product_name,
    		'product_price' => $request->product_price,
    		'product_stock' => $request->product_stock,
    		'explanation' => $request->explanation,
    	]);
 
    	return redirect("/product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $products = Product::find($id);
        return view('product.edit',['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'category_id' => 'required', 
            'product_name' => 'required', 
            'product_price' => 'required', 
            'product_stock' => 'required', 
            'explanation' => 'required', 
         ]);

       $products = Product::find($id);
       $products->category_id = $request->category_id;
       $products->product_name = $request->product_name;
       $products->product_price = $request->product_price;
       $products->product_stock = $request->product_stock;
       $products->explantion = $request->explanation;
       $products->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::find($id);
        $products->delete();
        return redirect('/product');
    }
}
