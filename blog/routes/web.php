<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // This is the way to import the controller

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });
route::view('/home', 'home');
route::redirect('/temp', '/home');

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::get('user', [UserController::class, 'getUser']); // This is the way to call the function from the controller
Route::get("about", [UserController::class, 'aboutUser']);
Route::get("user/{name}", [UserController::class, 'userName']);
