<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ContactsController;


Route::get('/', [AboutController::class, 'index']);

Route::get('/skills', [SkillController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/education', [EducationController::class, 'index']);

Route::get('/contacts', [ContactsController::class, 'index']);
