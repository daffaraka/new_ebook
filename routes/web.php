<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EBookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

// Semua role bisa akses
// Yang belum ada controller masuk ke homecontroller aja kalau bikin admin, ini bebas



Route::get('/',[HomeController::class,'beranda'])->name('beranda');

Route::resource('ebook', EBookController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('ebook/{id}/addToCart', [EBookController::class,'addToCart'])->name('ebook.addToCart');
    Route::get('cart', [EBookController::class,'cart'])->name('cart');
    Route::get('cart/{id}/delete', [EBookController::class,'deleteCart'])->name('cart.deleteCart');
    Route::get('cart/success', function() {
           return view('cart.success');
    })->name('cart.sucess');

});


//Admin
Route::middleware(['admin'])->group( function() {
    Route::get('account/maintenance/{id}', [AdminController::class,'editProfile'])->name('admin.editProfile');
    Route::post('account/maintenance/{id}/update', [AdminController::class,'updateProfile'])->name('admin.updateProfile');
    Route::get('account/role', [AdminController::class,'role'])->name('admin.role')->middleware('admin');
    Route::get('account/role/edit/{id}', [AdminController::class,'editRole'])->name('admin.editRole');
    Route::post('account/role/edit/{id}/update', [AdminController::class,'updateRole'])->name('admin.updateRole')->middleware();
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
