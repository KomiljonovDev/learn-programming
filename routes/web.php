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
Route::get('search/', [LessonController::class, 'searchLesson']);

Route::get('login', [AdminController::class,'login'])->name('login');
Route::post('login', [AdminController::class,'store']);

Route::middleware('auth')->group(function ()
{
	Route::get('admin', [AdminController::class,'home'])->middleware('auth');

	Route::get('admin/create-lesson', [AdminController::class,'createLesson'])->middleware('auth');
	Route::get('admin/create-category', [AdminController::class,'createCategory'])->middleware('auth');

	Route::post('admin/create-category', [AdminController::class,'storeCategory'])->middleware('auth');
	Route::post('admin/create-lesson', [AdminController::class,'storeLesson'])->middleware('auth');

	Route::get('admin/delete/{id:id}', [AdminController::class,'remove'])->middleware('auth');
});
