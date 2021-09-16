<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
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

        $products = Product::paginate(5);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('products.create', ['tags' => $tags]);
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
            'title' => 'required|string|min:5',
            'url'   => 'required|string|max:50'
        ]);

        $product = Product::create([
            'user_id'   => auth()->user()->id,
            'title'     => $request->get('title'),
            'url'       => $request->get('url')
        ]);

        $product->tags()->attach($request->tags);

        return redirect('/products')->with('success', 'The product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product  $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product  $product)
    {

        $tags = Tag::all();
        return view('products.edit', compact('product'),  ['tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product  $product)
    {
        $request->validate([
            'title'     => 'required|string|min:5',
            'url'       => 'required|string|max:50'
        ]);

        $product->title = $request->get('title');
        $product->url   = $request->get('url');
        $product->tags()->detach();
        $product->tags()->attach($request->tags);
        
        $product->save();

        return redirect('/products')->with('success', 'The product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product  $product)
    {
        $product->delete();

        return redirect('/products')->with('success', 'The item has been deleted');
    }   
}
