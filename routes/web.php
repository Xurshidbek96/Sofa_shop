<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
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

/* Front pages routes */
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/design', [PagesController::class, 'design']);
Route::get('/shop', [PagesController::class, 'shop']);
Route::get('/contact', [PagesController::class, 'contact']);

Route::post('/sendMessage', [MessageController::class, 'sendMessage'])->name('sendMessage');

/* Admin panel routes */

Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('admin.layouts.dashboard');
    });
    Route::resource('products', ProductController::class);
    Route::get('getMessage', [MessageController::class, 'getMessage'])->name('getMessage');
    Route::delete('deletetMessage/{id}', [MessageController::class, 'deletetMessage'])->name('deletetMessage');
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
