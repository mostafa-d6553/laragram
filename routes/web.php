<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
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



Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');


Route::get('/profile/{user}', [ProfileController::class, 'index'])
->middleware(['auth'])->name('profile.show');

Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])
->middleware(['auth'])->name('profile.edit');

Route::patch('/profile/{user}', [ProfileController::class, 'update'])
->middleware(['auth'])->name('profile.update');


Route::get('/p/create', [PostsController::class, 'create'])
->name('post.create');

Route::post('/p', [PostsController::class, 'store']);

Route::get('/p/{post}', [PostsController::class, 'show'])
->name('post.show');


require __DIR__.'/auth.php';
