<?php

namespace App\Http\Controllers;

use App\Models\User as UserModel;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class Authorization extends Controller
{
    public function login()
    {
        return view('authorization');
    }
    public function checkUser(Request $request): RedirectResponse
    {
        $user = UserModel::query()->where('email', $request->email)->where('password', $request->password)->get();
        if (count($user) > 0)
            return redirect()->route('getUsers')->with('success', 'user checked successful');
        return redirect()->route('login')->with('success', 'user is checked successful');
    }
}
