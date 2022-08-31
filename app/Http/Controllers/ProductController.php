<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ImageProduct;
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
        return view('bakery.dashboard.manage_product', [
            'title' => 'Product Management',
            'users' => auth()->user(),
            'product' => Products::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bakery.products.index', [
            'users' => auth()->user(),
            'title' => "Add New Product"
        ]);
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
            'title' => 'required|max:255',
            'tagline' => 'required|max:255',
            'price' => 'required',
            'content' => 'required'
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Products::create($input);
        return redirect('/products')->with('success', 'New user has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        $data = ImageProduct::where('product_id',$products->id)->paginate(10);
        return view('bakery.products.show', [
            'users' => auth()->user(),
            'data' => $data,
            'id' => $products->id,
            'title' => 'List Image Product ' . $products->title 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        return view('bakery.products.edit', [
            'users' => auth()->user(),
            'product' => $products,
            'title' => 'Data Product'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        $rules = $request->validate([
            'title' => 'required|max:255',
            'tagline' => 'required|max:255',
            'price' => 'required',
            'content' => 'required'
        ]);
        $validatedData = $rules;
        $validatedData['user_id'] = auth()->user()->id;

        Products::where('id', $products->id)->update($validatedData);
        return redirect('/products')->with('success', 'Data product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        Products::destroy($products->id);
        return redirect('/products')->with('success', 'Data product has been deleted');
    }
}
