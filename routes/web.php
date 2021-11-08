<?php

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

Route::get("/", function () {
    return view("home");
})->name("home");

Route::get("/contact", function () {
    return view("contact");
})->name("contact");

Route::get("/{id}", function ($id) {

    $data = config("comics");
    
    if ($id > count($data)) {
        abort("404");
    }
    $comic = $data[$id];

    return view("comic", compact("comic"));

})->where("id", "[0-9]+")->name("singol-comic");