<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\Authorization;
use App\Http\Controllers\ChangeAvatara;
use App\Http\Controllers\ListViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\ViewAva;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [User::class, 'getUser'])->name('createUser');
Route::get('/role', [User::class, 'getRole'])->name('createRole');
Route::any('/view', [ListViewController::class, 'getUsers'])->name('getUsers');
Route::get('/login', [Authorization::class, 'login'])->name('login');
Route::get('/create login', [Authentication::class, 'login'])->name('createLogin');
Route::post('/user', [User::class, 'createUser'])->name('createUser.post');
Route::post('/role', [User::class, 'createRole'])->name('createRole.post');
Route::post('/login', [Authorization::class, 'checkUser'])->name('login.post');
Route::post('/create login', [Authentication::class, 'createUser'])->name('createLogin.post');
Route::get('/view avatar', [ViewAva::class, 'getUsers'])->name('getAvatar');
Route::get('/{name}', [ChangeAvatara::class, 'getUser'])->name('viewUser');
Route::post('/{name}', [ChangeAvatara::class, 'postUser'])->name('viewUser.post');
