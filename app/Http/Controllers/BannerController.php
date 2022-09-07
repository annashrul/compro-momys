<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\File;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $page_title = 'Banner Management';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.manage_banner', [
            'title' => $page_title,
            'users' => auth()->user(),
            'data' => Banner::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Banner $banner)
    {
           return view('bakery.banners.index', [
            'users' => auth()->user(),
            // 'user' => $banner,
            // 'roles' => Role::all(),
            'title' => 'Create Data Banner'
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
         $validatedData = $request->validate([
            'title' => 'required',
            'detail' => 'required|max:1000',
            'image' => 'required|image|max:2048',
        ]);
        

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Banner::create($input);
        return redirect('/banners')->with('success', 'New Banner has been Added');

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
    public function edit(Banner $banner)
    {
           return view('bakery.banners.edit', [
            'users' => auth()->user(),
            'data' => $banner,
            'banner' => Banner::all(),
            'title' => 'Create Data User'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'detail' => 'required|max:1000',
        ]);
        

        $input = $request->except(['_token', '_method' ]);
      
        if ($image = $request->file('image')) {
            $destinationPath = 'banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            File::delete($destinationPath. $banner->image);
            // unlink("banner/".$banner->image);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        Banner::where('id', $banner->id)->update($input);
        return redirect('/banners')->with('success', 'Banner Edit Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if($banner->image){
            File::delete('banner/'. $banner->image);

        }

        Banner::destroy($banner->id);
        return redirect('/banners')->with('success', 'Banner Delete Success');

    }
}
