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
    return view('admin.list.clients', [
        "listDate" => [[
            "id" => 1,
            "name" => "test1"
        ], [
            "id" => 2,
            "name" => "test2"
        ]]
    ]);
});
