<?php

use App\Http\Controllers\BlogController;
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
    Route::post('show/{id}', [BlogController::class, 'show'])->name('blogs.show');
});
