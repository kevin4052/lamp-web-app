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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'middleware' => 'auth',
    'as' => 'auth.'
], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('pages/profile');
    })->name('profile');
    
    Route::put('/profile/edit', [\App\Http\Controllers\User\UserController::class, 'update'])->name('profile.edit');
    
    Route::get('/photos/create', [\App\Http\Controllers\PhotoController::class, 'create'])->name('photos.create');
    
    Route::put('/photos', [\App\Http\Controllers\PhotoController::class, 'store'])->name('photos.store');
});


require __DIR__.'/auth.php';
