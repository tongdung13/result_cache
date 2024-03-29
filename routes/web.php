<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GetMaxController;
use App\Http\Controllers\SliderController;
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

Route::prefix('blogs')->group(function () {
    Route::get('', [BlogController::class, 'index'])->name('blogs.index');
    Route::post('show', [BlogController::class, 'show'])->name('blogs.show');
    // Route::post('show/{id}', [BlogController::class, 'show'])->name('blogs.show');
});

Route::prefix('getMax')->group(function () {
    Route::get('create', [GetMaxController::class, 'create'])->name('getMax.create');
    Route::post('store', [GetMaxController::class, 'store'])->name('getMax.store');
});

Route::get('slider', [SliderController::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
