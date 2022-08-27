<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $page_title = 'User Management';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.dashboard.manage_user', [
            'title' => 'User Management',
            'users' => auth()->user(),
            'user' => User::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bakery.users.index',[
            'users' => auth()->user(),
            'roles' => Role::all(),
            'title' => "Add New User"
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
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone_number' => 'required|max:13|unique:users',
            'dob' => 'required|max:10|min:10',
            'birth_place' => 'required|max:255',
            'address' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        User::create($input);
        return redirect('/users')->with('success', 'New user has been Added');
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
    public function edit(User $user)
    {
         return view('bakery.users.edit', [
            'users' => auth()->user(),
            'user' => $user,
            'roles' => Role::all(),
            'title' => 'Edit Data User'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
          $validatedData = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone_number' => 'required|max:13|unique:users',
            'dob' => 'required|max:10|min:10',
            'birth_place' => 'required|max:255',
            'address' => 'required|max:255',
            'password' => 'required|min:5|max:255'

        ]);
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        
        User::where('id', $user->id)->update($input);
        return redirect('/users')->with('success', 'New user has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
