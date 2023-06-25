<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User as UserModel;
use App\Models\Value;
use Illuminate\Support\Facades\DB;

class ListViewController extends Controller
{
    public function getUsers(Request $request)
    {
        if (isset($request->search)) {
            $users = UserModel::query()->where('name', 'like', '%' . $request->search . '%')->get();
        } else
            $users = UserModel::all();
        return view('viewUsers', compact('users'));
    }
}
