<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User as ModelUser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;

class ChangeAvatara extends Controller
{
    public function getUser(string $name)
    {
        $user = ModelUser::query()->where('name', $name)->get();
        return view('viewUser', compact('user'));
    }
    public function postUser(Request $request, string $name): RedirectResponse
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('photo')) {
                $user = ModelUser::query()->where('name', $name)->get();
                $user = compact('user');
                // Storage::disk('local')->delete($user['user'][0]['id'] . '/' . $user['user'][0]['id'] . '.png');
                app(Filesystem::class)->delete(public_path($user['user'][0]['id'] . '/' . $user['user'][0]['id'] . '.png'));
                $file = $request->file('photo');
                $file->move(public_path() . '/' . $user['user'][0]['id'], $user['user'][0]['id'] . '.png');
            }
        }

        return redirect()->route('viewUser', $name);
    }
}
