<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\File;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Location Management';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.manage_location', [
            'title' => $page_title,
            'users' => auth()->user(),
            'data' => Location::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Location $location)
    {
       return view('bakery.location.index', [
            'users' => auth()->user(),
            // 'user' => $banner,
            // 'roles' => Role::all(),
            'title' => 'Create Data Location'
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
            'phone_number' => 'required',
            'instagram' => 'required',
            'link' => 'required',
            'detail' => 'required|max:1000',
            'email' => 'required|email:dns',
            'image' => 'required|image|max:2048',
        ]);
        

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'location/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Location::create($input);
        return redirect('/location')->with('success', 'New Location has been Added');
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
    }
}
