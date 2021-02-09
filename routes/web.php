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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::get('/restricted-zone/manage', [App\Http\Controllers\TestController::class, 'logged'])->name('restricted-zone-manage'); */

Route::name('blogs_path')->get('/blogs', [App\Http\Controllers\BlogsController::class, 'index']);

Route::name('create_blogs_path')->get('/blogs/create', [App\Http\Controllers\BlogsController::class, 'create']);

Route::name('store_blog_path')->post('/blogs', [App\Http\Controllers\BlogsController::class, 'store']);

Route::name('blog_path')->get('/blogs/{id}', [App\Http\Controllers\BlogsController::class, 'show']);

Route::name('edit_blog_path')->get('/blogs/{id}/edit', [App\Http\Controllers\BlogsController::class, 'edit']);

Route::name('update_blog_path')->put('/blogs/{id}', [App\Http\Controllers\BlogsController::class, 'update']);

Route::name('delete_blog_path')->delete('/blogs/{id}', [App\Http\Controllers\BlogsController::class, 'destroy']);
