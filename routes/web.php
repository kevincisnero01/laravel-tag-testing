<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome', [
        'tags' => Tag::get()
    ]);
});

Route::get('about', function () {
    return view('welcome');
});

Route::view('profile', 'profile');

Route::post('profile', [App\Http\Controllers\ProfileController::class, 'upload']);

//=== Proyecto Tags ===
Route::post('tags',[TagController::class, 'store']);
Route::delete('tags/{tag}',[TagController::class, 'destroy']);