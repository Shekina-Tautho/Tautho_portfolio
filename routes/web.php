<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;


Route::get('/', [AboutController::class, 'index']);


Route::get('/skills', [SkillController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

