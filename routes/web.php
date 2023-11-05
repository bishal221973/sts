<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::put('/profile/{user}', [App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('profile.update');
Route::get('/organization-setting', [App\Http\Controllers\HomeController::class, 'orgSetting'])->name('setting.org');
Route::get('/security-setting', [App\Http\Controllers\HomeController::class, 'security'])->name('setting.security');

Route::resource('movie', App\Http\Controllers\MovieController::class);
Route::get('movie/{movie}/shows', [App\Http\Controllers\MovieController::class,"shows"])->name('movie.shows');
Route::resource('language', App\Http\Controllers\LanguageController::class);
Route::resource('type', App\Http\Controllers\TypeController::class);
Route::resource('tag', App\Http\Controllers\TagController::class);
Route::resource('tax', App\Http\Controllers\TaxController::class);
Route::resource('show', App\Http\Controllers\MovieShowController::class);
Route::get('movie-detail/{id}', [App\Http\Controllers\BookingController::class,'movieDetail'])->name('movieDetail');
Route::post('seat-detail', [App\Http\Controllers\BookingController::class,'seatDetail'])->name('seatDetail');
Route::post('client-detail', [App\Http\Controllers\BookingController::class,'clientDetail'])->name('clientDetail');
Route::post('book', [App\Http\Controllers\BookingController::class,'book'])->name('book');
Route::get('booked/{id}',[BookingController::class,'booked'])->name('booked');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::get('booked-seat-list/{id}',[BookingController::class,'bookedSeat'])->name('bookedSeat');
Route::get('report',[BookingController::class,'report'])->name('report');
Route::post('org-setting',[SettingController::class,'org'])->name('org');
Route::post('change-password/{user}',[UserController::class,'changePassword'])->name('changePassword');

