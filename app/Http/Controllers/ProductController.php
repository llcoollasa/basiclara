<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [ "products" => Product::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'amount' => ['required', 'numeric'],
        ]);

        Product::create($validatedData);

        return redirect()->back()->with('message', 'Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'amount' => ['required', 'numeric'],
        ]);

        $product->name = request('name');
        $product->amount = request('amount');
        $product->save();

        return redirect()->back()->with('message', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function test() {
        // One to one
        // return Product::find(1)->productDetails()->get();
        // return Product::find(1)->productDetails;

        // One to one (reverse)
        // return ProductDetail::find(3)->product()->get();
        // return ProductDetail::find(3)->product;

        // One to Many

        // return OrderDetail::where('order_id', 1)->get()->products();
        // return OrderDetail::where('order_id', 1)->get()->map(function($order) {
        //     return $order->products()->get();
        // });

        // return OrderDetail::where('order_id', 1)->get()->products();

        // One to Many (reverse)
        // return Product::where('id', 1)->first()->orderDetail()->get();
    }
}   
