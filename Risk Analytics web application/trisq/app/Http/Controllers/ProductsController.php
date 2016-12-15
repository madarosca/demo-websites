<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductsFormRequest;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(25);

        return view('dictionaries.view_products', array(
            'products' => $products
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dictionaries.add_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsFormRequest $request)
    {
        $product = new Product;
        $product->name = $request->get('name');
        $product->category = $request->get('category');
        $product->description = $request->get('description');
        $product->volume = $request->get('volume');
        $product->vbw = $request->get('vbw');
        $product->save();
      
        return redirect('/products/view')->with('status', 'The product "'.$product->name.'" has been created!');
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
        $product = Product::find($id);
        return view('dictionaries.edit_products', array(
            'product' => $product
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsFormRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->category = $request->get('category');
        $product->description = $request->get('description');
        $product->volume = $request->get('volume');
        $product->vbw = $request->get('vbw');
        $product->save();
       
        return redirect('/products/view')->with('status', 'The product "'.$product->name.'" has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('status', 'The product "'.$product->name.'" has been deleted!');
    }
}
