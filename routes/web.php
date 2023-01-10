<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class);

Route::get('/detail', [HomeController::class,'detail']);

Auth::routes();

Route::get('/sign_in', [App\Http\Controllers\HomeController::class, 'index'])->name('sign-in');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'customLogin'])->name('login');
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', [\App\Http\Controllers\BlogController::class, 'list'])->name('list');
    Route::get('/insert', [\App\Http\Controllers\BlogController::class, 'view_insert'])->name
    ('view-insert');
    Route::post('/save', [\App\Http\Controllers\BlogController::class, 'save'])->name
    ('blog_save');
});
