<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('text', function () {
    return view('text');
});
Route::get('text2', function () {
    return view('text2');
});
//http://127.0.0.1:8000/products?name=phamminhtri
Route::get('products', function (Request $request) {
    echo 'Product List ' . $request->query('name');
});
//http://127.0.0.1:8000/user/detail/27/phamminhtri
//http://127.0.0.1:8000/user/detail/27/
Route::get('user/detail/{id}/{name?}', function ($id, $name = '') {
    echo "User detal : $id $name";
});
