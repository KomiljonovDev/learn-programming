<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LessonController::class, 'index']);
Route::get('lesson/{lesson:lesson_slug}', [LessonController::class, 'showLesson']);
Route::get('category/{category:category_slug}', [CategoryController::class, 'showCategories']);

Route::get('login', [AdminController::class,'login'])->name('login');
Route::post('login', [AdminController::class,'store']);

Route::get('admin', [AdminController::class,'home'])->middleware('auth');