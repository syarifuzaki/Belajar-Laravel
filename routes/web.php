<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

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

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::group([
    'prefix' => 'categories',
    'as' => 'categories.',
], function() {
    Route::get('', [CategoryController::class, 'index'])->name('index');
    Route::post('', [CategoryController::class, 'add'])->name('add');
    Route::put('{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('{id}', [CategoryController::class, 'delete'])->name('delete');
});
Route::get('/tag', [TagController::class, 'index'])->name('tag');
Route::get('/post', [PostController::class, 'index'])->name('dashboard');
