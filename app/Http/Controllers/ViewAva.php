<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as UserModel;

class viewAva extends Controller
{
    public function getUsers()
    {
        $users = UserModel::all();
        return view('veiwAvatar', compact('users'));
    }
}
