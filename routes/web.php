<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
})->name('index');

Route::get('form', function () {
    return view('form');
})->name('form');

Route::post('store', function (Request $request) {

    DB::table('signup_info')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'semister' => $request->semister,
        'roll' => $request->roll,
        'shift' => $request->shift,
        'registration' => $request->reg,
    ]);

    return redirect()->route('form');
})->name('store');
