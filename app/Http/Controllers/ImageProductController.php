<?php

namespace App\Http\Controllers;

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
    }
}
