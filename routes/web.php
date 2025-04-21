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

Route::get('/index', function () {
    $data = collect([
        (object)['id' => 1, 'nama' => 'Alice'],
        (object)['id' => 2, 'nama' => 'Bob'],
        (object)['id' => 3, 'nama' => 'Charlie'],
        (object)['id' => 4, 'nama' => 'Diana'],
        (object)['id' => 5, 'nama' => 'Ethan']
    ]);

    return view('index.index', compact('data'));
});
