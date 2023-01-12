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

Route::get('/detail/{id}', [HomeController::class,'detail'])->name('detail');

Auth::routes();

Route::get('/sign_in', [App\Http\Controllers\HomeController::class, 'index'])->name('sign-in');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'customLogin'])->name('login');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', [\App\Http\Controllers\BlogController::class, 'list'])->name('list');
    Route::get('/insert', [\App\Http\Controllers\BlogController::class, 'view_insert'])->name
    ('view-insert');
    Route::post('/save', [\App\Http\Controllers\BlogController::class, 'save'])->name
    ('blog_save');
    Route::get('/status/{id}', [\App\Http\Controllers\BlogController::class, 'status'])->name
    ('status');
    Route::get('/delete/{id}', [\App\Http\Controllers\BlogController::class, 'delete'])->name
    ('delete');
    Route::get('/update/{id}', [\App\Http\Controllers\BlogController::class, 'view_update'])->name
    ('view-update');
    Route::post('/update', [\App\Http\Controllers\BlogController::class, 'update'])->name
    ('update');
});

Route::group(['prefix' => 'comment', 'as' => 'comment.'], function () {
    Route::get('/{blog_id}', [\App\Http\Controllers\CommentController::class, 'list'])->name('list');
    Route::post('/save', [\App\Http\Controllers\CommentController::class, 'save'])->name('save');
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/{blog_id}', [\App\Http\Controllers\CommentAdminController::class, 'list'])
            ->name('list-comment');
        Route::get('/status/{id}', [\App\Http\Controllers\CommentAdminController::class, 'status'])
            ->name
        ('status');
        Route::get('/delete/{id}', [\App\Http\Controllers\CommentAdminController::class, 'delete'])
            ->name
        ('delete');
    });
});


Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/', \App\Http\Controllers\ProfileController::class)
        ->name('view');
    Route::post('/update_password', [\App\Http\Controllers\ProfileController::class, 'updatePassword'])
        ->name('update_password');
    Route::post('/update', [\App\Http\Controllers\ProfileController::class, 'updateProfile'])
        ->name('update_profile');
});


Route::group(['prefix' => 'slides', 'as' => 'slides.'], function () {
    Route::get('/', [\App\Http\Controllers\SlideController::class,'list'])
        ->name('view');
    Route::post('/save', [\App\Http\Controllers\SlideController::class, 'save'])->name
    ('save');
    Route::get('/status/{id}', [\App\Http\Controllers\SlideController::class, 'status'])
        ->name
        ('status');
});

Route::resource('roles', RolesController::class);
Route::resource('permissions', PermissionsController::class);
