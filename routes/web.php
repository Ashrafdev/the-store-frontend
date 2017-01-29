<?php

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

Route::get('/', function () { return view('welcome'); });
Route::get('/password/reset', function () { return view('auth.passwords.email'); });
Route::get('/post_item', function () { return view('post_item.index'); });
Route::get('/profile', function () { return view('users.show'); });
Route::get('/my/items', function () { return view('items.index'); });
Route::get('/view/item/',  function () { return view('items.show'); });

