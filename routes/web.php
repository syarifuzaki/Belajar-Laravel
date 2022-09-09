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

Route::group([
  'prefix' => 'auth',
  'as' => 'auth.'
], function() {
  Route::get('login', [DashboardController::class, 'loginView'])->name('login');
  Route::post('login', [DashboardController::class, 'login']);
  Route::get('register', [DashboardController::class, 'registerView'])->name('register');
  Route::post('register', [DashboardController::class, 'register']);
});

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

Route::group([
  'prefix' => 'tag',
  'as' => 'tags.',
], function() {
  Route::get('', [TagController::class, 'index'])->name('index');
  Route::post('', [TagController::class, 'add'])->name('add');
  Route::put('{id}', [TagController::class, 'update'])->name('update');
  Route::delete('{id}', [TagController::class, 'delete'])->name('delete');
});

Route::group([
  'prefix' => 'post',
  'as' => 'post.',
], function() {
  Route::get('', [PostController::class, 'index'])->name('index');
  Route::post('', [PostController::class, 'add'])->name('add');
  Route::put('{id}', [PostController::class, 'update'])->name('update');
  Route::delete('{id}', [PostController::class, 'delete'])->name('delete');
});
