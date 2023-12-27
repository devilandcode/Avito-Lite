<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard', ['auth' => Auth::class]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->as('admin.')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('users', UsersController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
