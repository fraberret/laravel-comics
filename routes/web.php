<?php

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

    $products = config('db');
    /* @dd($products); */

    return view('home', compact('products'));
})->name('home');


Route::get('/{id}', function ($id) {

    $comic = config('db')[$id];


    return view('comic', compact('comic'));
})->name('comic');
