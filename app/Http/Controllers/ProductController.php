<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $data = Product::latest()->paginate(5);
        return view ('products.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_stock' => 'required',
            'product_buy_price' => 'required',
            'product_sell_price' => 'required',
            'product_image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:1024|dimensions:min_width=100,min_height=100,max_width=800,max_height=800'
        ]);

        $file_name = time() . '.' . request()->product_image->getClientOriginalExtension();

        request()->product_image->move(public_path('img/product'), $file_name);

        $product = new product;

        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_stock = $request->product_stock;
        $product->product_buy_price = $request->product_buy_price;
        $product->product_sell_price = $request->product_sell_price;
        $product->product_image = $file_name;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Selected data product has been successfully added.');


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
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_stock' => 'required',
            'product_buy_price' => 'required',
            'product_sell_price' => 'required',
            'product_image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:1024|dimensions:min_width=100,min_height=100,max_width=800,max_height=800'
        ]);

        $product_image = $request->hidden_product_image;

        if($request->product_image != '')
        {
            $product_image = time() . '.' . request()->product_image->getClientOriginalExtension();
            request()->product_image->move(public_path('img/product'), $product_image);
        }

        $product = Product::find($request->hidden_id);
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_stock = $request->product_stock;
        $product->product_buy_price = $request->product_buy_price;
        $product->product_sell_price = $request->product_sell_price;
        $product->product_image = $product_image;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Selected data product has been successfully updated');


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
        return redirect()->route('products.index')->with('success', 'Selected data product has been successfully deleted');
    }
}
