<?php

use App\Http\Controllers\ApartmentController;
use App\Models\Customer;
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

Route::get('/', [ApartmentController::class, 'index'])->name('index');
Route::get('/about', [ApartmentController::class, 'about'])->name('about');
Route::get('/ourteam', [ApartmentController::class, 'ourteam'])->name('ourteam');
Route::get('/contact', [ApartmentController::class, 'contact'])->name('contact');
Route::get('/ourblog', [ApartmentController::class, 'ourblog'])->name('blog');
Route::get('/login', [ApartmentController::class, 'login'])->name('login');
Route::get('/details', [ApartmentController::class, 'apartment'])->name('apartment');
Route::get('/blog', [ApartmentController::class, 'blog'])->name('blog');
Route::get('/blogfirst', [ApartmentController::class, 'blog1'])->name('blog1');
