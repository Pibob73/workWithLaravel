<?php

namespace App\Http\Controllers;

use App\Models\c;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User as ModelUser;
use Illuminate\Http\RedirectResponse;
use App\Models\Role;

class User extends Controller
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
    public function getUser(): View
    {
        $roles = Role::all();
        // dd($roles);
        return view('createUser', compact('roles'));
    }
    public function getRole(): View
    {
        return view('createRole');
    }
    public function createUser(Request $request): RedirectResponse
    {
        // dd($request->all());
        ModelUser::create($request->all());
        return redirect()->route('createUser')->with('success', 'user create successful');
    }
    public function createRole(Request $request): RedirectResponse
    {
        Role::create($request->all());
        return redirect()->route('createRole')->with('success', 'user create successful');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
