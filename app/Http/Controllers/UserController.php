<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\File as FacadesFile;

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
        return view('bakery.users.index', [
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
            'role_id' => 'required',
            'address' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['image'] = "$profileImage";
        }
        User::create($validatedData);
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
            'title' => 'Create Data User'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'dob' => 'required|max:10|min:10',
            'birth_place' => 'required|max:255',
            'role_id' => 'required',
            'address' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
        if ($request->phone_number != $user->phone_number) {
            $rules['phone_number'] = 'required|max:13|unique:users';
        }

        $validatedData = $request->validate($rules);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validatedData['image'] = "$profileImage";
        } else {
            unset($validatedData['image']);
        }
        User::where('id', $user->id)->update($validatedData);
        return redirect('/users')->with('success', 'New user has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // if ($user->image !== null | $user->image !== "") {
        //     File::delete('image', $user->image);
        // }

        User::destroy($user->id);
        return redirect('/users')->with('success', 'User has been Deleted');
    }
}
