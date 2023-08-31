<?php

namespace App\Http\Controllers;

use App\User;
use App\Country;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('country')->get();
        return view('user.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        return view('user.add', ['countries' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            User::$validate
        );
        User::create($request->all());
        return redirect('users')->with('status', 'Item added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        $countries = Country::get();
        return view('user.show', ['user' => $user, 'countries' => $countries]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $countries = Country::get();
        return view('user.edit', ['user' => $user, 'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate(
            $request,
            User::$validate
        );
        $user->update($request->all());
        return redirect('users')->with('status', 'Item edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete($user);
        return redirect('users')->with('status', 'Item deleted successfully!');
    }
}
