<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;


Route::get('/', [AboutController::class, 'index']);


Route::get('/skills', [SkillController::class, 'index']);


Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

