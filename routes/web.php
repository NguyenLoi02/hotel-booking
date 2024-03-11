<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\NewsController;

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
//room
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/room', [RoomController::class, 'room'])->name('room');
Route::get('/room-detail', [RoomController::class, 'room_detail'])->name('room_detail');
Route::post('/searchRoom', [RoomController::class, 'searchRoom'])->name('searchRoom');


//news
Route::get('/news', [NewsController::class, 'news'])->name('news');


//login
Route::get('/login', [CustomerController::class, 'login'])->name('login');
Route::post('/post-login', [CustomerController::class, 'postLogin'])->name('postLogin');
//register
Route::get('/register', [CustomerController::class, 'register'])->name('register');
Route::post('/post-register', [CustomerController::class, 'postRegister'])->name('postRegister');



