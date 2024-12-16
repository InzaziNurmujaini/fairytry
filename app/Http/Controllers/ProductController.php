<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        //
        $product = Product::all();
        return response()->json($product);
    }

   

    public function store(Request $request)
    {
        //
        $product = Product::create([
            'product_name'=>$request->product_name,
            'warna'=>$request->warna,
            'price'=>$request->price,
            
        ]);

        return response()->json(["message"=>"Berhasil membuat product baru",'product'=>$product],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->update([
            'product_name'=>$request->product_name,
            'warna'=>$request->warna,
            'price'=>$request->price,
        ]);
        return response()->json(["message"=>"Berhasil update product    ",'product'=>$product],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message'=> 'Berhasil menghapus product'],200);
    }
}
