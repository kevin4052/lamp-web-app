<?php

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

Route::get('/', function () { return view('welcome'); });

Route::group([
    'middleware' => 'auth',
    'as' => 'auth.'
], function () {    
    Route::get('/profile/{id}', [\App\Http\Controllers\User\UserController::class, 'index'])->name('profile');
    
    Route::put('/profile/edit', [\App\Http\Controllers\User\UserController::class, 'update'])->name('profile.edit');
    
    Route::get('/photos/create/{id}', [\App\Http\Controllers\PhotoController::class, 'create'])->name('photos.create');
    
    Route::put('/photos/{id}', [\App\Http\Controllers\PhotoController::class, 'store'])->name('photos.store');
    
    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
