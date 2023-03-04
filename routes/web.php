<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('imprint', function() {
    return view('imprint');
})->name('imprint');
