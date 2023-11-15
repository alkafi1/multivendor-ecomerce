<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
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


/* ----------Admin Route start----------- */
Route::prefix('admin')->group(function(){
    Route::get('/',[LoginController::class,'login_index'])->name('admin.login');
    Route::post('/login',[LoginController::class,'admin_login_post'])->name('admin.login.post');
    Route::middleware(['admin'])->group(function(){
        Route::get('/login',[LoginController::class,'admin_logout'])->name('admin.logout');
        Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    });
});


/* ----------Admin Route End----------- */



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
