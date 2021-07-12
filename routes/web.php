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

Route::get('/', function () {
    $data = [
        "name" => "Hello World!",
        "navfirst" => [
             "about",
             "blog",
             "portfolio",
             "contact"
        ],
        "socials" => [
            "fab fa-twitter",
            "fab fa-facebook-f",
            "fab fa-instagram",
            "fab fa-linkedin-in"
        ]
    ];
    return view('home', $data);
});
