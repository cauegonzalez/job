<?php

namespace App\Http\Controllers;

use App\Product;
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
        $products = Product::all();
        return view('product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->title);
        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $nameImage = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nameImage);
        }

        if ($request->hasfile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $nameThumbnail = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nameThumbnail);
        }
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
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
        $product = Product::find($id);
        // dd($product->title, $id);
        return view('product.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($product);
        $product = Product::find($product->id);
        $product->title = $request->get('name');
        $product->description = $request->get('description');
        $product->image = ($request->get('image') != '' ? $request->get('image') : 'nophoto.png');
        $product->thumbnail = ($request->get('thumbnail') != '' ? $request->get('thumbnail') : 'nophoto.png');
        $product->price = $request->get('price');
        $product->save();
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Information has been  deleted');
    }
}
