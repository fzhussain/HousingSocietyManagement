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
})->name('home');

Route::get('/dashboard', 'App\Http\Controllers\PageController@dashboardPage')->middleware(['auth'])->name('dashboard');

Route::get('/admin', 'App\Http\Controllers\PageController@adminPage')->middleware(['auth', 'admin'])->name('admin');

Route::get('/logout', function() {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
});

Route::get('/signin', 'App\Http\Controllers\PageController@loginPage')->name('signin');

require __DIR__.'/auth.php';
