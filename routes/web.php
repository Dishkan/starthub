<?php

use Illuminate\Support\Facades\Auth;
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
    return view('html.index');
})->name('main');

Route::get('/about', function () {
    return view('html.about');
});

Route::get('/areas', function () {
    return view('html.services');
});

Route::get('/projects', function () {
    return view('html.portfolio');
});

Route::get('/news', function () {
    return view('html.blog');
});

Route::get('/contact', function () {
    return view('html.contact');
});

Route::get('/show-single-news', function () {
    return view('html.blog-single');
});


Route::get('/finance', function () {
    return view('html.sections.finance');
});
Route::get('/finance/alif', function () {
    return view('html.alif.alif');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\FounderController::class, 'index'])->name('founder');
Route::post('/store', [App\Http\Controllers\FounderController::class, 'store'])->name('project_store');
