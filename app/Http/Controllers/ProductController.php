<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

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
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image_url = $request->image_url;

       // $product->alt = $request->image_alt;

        //time(); //string - tekstas, 12544353531 - timestamp

       // $imageName = 'image' . time().'.'.$request->image_src->extension();

        //$request->image_src->move(public_path('images') , $imageName);

       // $product->src = $imageName;
        //paveiksliukas.docx
        // $imageName = image1245157451354.docx


        //pacio paveiksliu patalpinimas i serveri ir jo pavadinimo pasiemimas/sudarymas, kelio irasymas i duomenu baze
        
        //paveiksliukai/ aplankas

        //paveiksliukas.jpg
        //paveiksliukas.png 
        //paveiksliukas.png

        //paveiksliukas24135.png
        //paveiksliukas21251.png

       // $product->width = $request->image_width;
        //$product->height = $request->image_height;
       // $product->class = $request->image_class;

        $product->save();

        // 
        return 0;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
