<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FriendController;
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
    return view('welcome');
});

Route::resource('friends',FriendController::class);
Route::get('friends/trash/{id}',[FriendController::class, 'trash'])->name('friends.trash')->middleware(['auth','verified']);
Route::get('friends/trashed/',[FriendController::class, 'trashed'])->name('friends.trashed')->middleware(['auth','verified']);
Route::get('friends/restore/{id}',[FriendController::class, 'restore'])->name('friends.restore')->middleware(['auth','verified']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
