<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User as ModelUser;
use App\Models\Role;

class Authentication extends Controller
{
    public function login()
    {
        $roles = Role::all();
        return view('authentication', compact('roles'));
    }
    public function createUser(Request $request): RedirectResponse
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                ModelUser::create($request->except('file'));
                $user = ModelUser::query()->where('name', $request->name)->get();
                $user = compact('user');
                $file->move(public_path() . '/' . $user['user'][0]['id'], $user['user'][0]['id'] . '.png');
            }
        }
        return redirect()->route('createLogin');
    }
}
