<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bakery.role.index', [
            'users' => User::all()
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
            'password' => 'required|min:5|max:255'
        ]);
        User::create($validatedData);
        return redirect('/my-wallets')->with('success', 'New user has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('bakery.role.edit', [
            'users' => $user,
            'roless' => Role::all()
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
        $validatedData = $request->validate([
            'fname' => 'required|max:255',
            'role_id' => 'required'

        ]);
        User::where('id', $user->id)->update($validatedData);
        return redirect('/my-wallets')->with('success', 'New user has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/my-wallets')->with('success', 'User has been deleted');
    }
}
