<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectDetailController;
use App\Http\Controllers\BlogDetailController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/project-detail', [ProjectDetailController::class, 'index'])->name('projectDetail');
Route::get('/blog-detail', [BlogDetailController::class, 'index'])->name('blogDetail');

// Route::get('/today-special', [TodaySpecialController::class, 'index'])->name('todaySpecial')