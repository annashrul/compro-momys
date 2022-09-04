<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ImageProduct;



class ImageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump($request->all());
        //  $validatedData = $request->validate([
        //     'product_id' => 'required|max:1000',
        //     'image' => 'required|image|max:2048',
        // ]);

        // var_dump($validatedData);
        

        // $input = $request->all();
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'product/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }

        // ImageProduct::create($input);
        // return redirect('/products/'. $request->product_id)->with('success', 'New Image has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
         return view('bakery.image_product.index', [
            'users' => auth()->user(),
            'data' => $product,
            'id' => $product->id,
            // 'roles' => Role::all(),
            'title' => 'Add Image Product'
        ]);
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
=======
use App\Models\ImageProduct;
use App\Models\Products;
use Illuminate\Http\Request;

class ImageProductController extends Controller
{
    public function create(Products $products)
    {
        return view('bakery.imageproduct.index', [
            'users' => auth()->user(),
            'title' => "Add New Image Product",
            'product' => $products
        ]);
    }

    public function store(Request $request, $products_id)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
        ]);
        $validatedData['product_id'] = $products_id;
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['image'] = "$profileImage";
        } else {
            unset($validatedData['image']);
        }
        ImageProduct::create($validatedData);
        return redirect("/products/$products_id")->with('success', 'Image has been added');
    }

    public function delete($products_id, ImageProduct $imageproduct)
    {
        ImageProduct::destroy($imageproduct->id);
        return redirect("/products/$products_id")->with('success', 'Image has been deleted');
>>>>>>> d29defad4bcef44fc7ef69231abefcff7e4f163d
    }
}
