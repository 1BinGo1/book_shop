<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('scheme.user.index', ['users' => User::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scheme.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $user = new User();
        $user->fill($request->only($user->getFillable()));
        $user->password = Hash::make('password');
        if ($user->saveOrFail()){
            return redirect()->route('users.index')->with('status', 'success');
        }
        else{
            return back()->with('status', 'error')->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('scheme.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function update(StoreUserRequest $request, User $user)
    {
        $validated = $request->validated();
        if ($user->updateOrFail($request->only($user->getFillable()))){
            return redirect()->route('users.index')->with('status', 'success');
        }
        else{
            return back()->with('status', 'error')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function destroy(User $user)
    {
        if ($user->deleteOrFail()){
            return redirect()->route('users.index')->with('status', 'success');
        }
        else{
            return redirect()->route('users.index')->with('status', 'error');
        }
    }
}
