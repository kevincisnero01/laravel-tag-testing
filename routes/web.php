<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;

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