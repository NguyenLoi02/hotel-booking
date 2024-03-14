<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminBookingRoomController;
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
//========================================================================================================================
//admin routes
Route::get('/admin', [AdminHomeController::class, 'adminHome'])->name('home');

//admin bookings routes
Route::get('/admin-booking-room', [AdminBookingRoomController::class, 'adminBookingRoom'])->name('admin_booking_room');
Route::get('/admin-booked-room', [AdminBookingRoomController::class, 'adminBookedRoom'])->name('admin_booked_room');












// =======================================================================================================================
//client routes

Route::get('/', [HomeController::class, 'home'])->name('home');

//room
Route::get('/room', [RoomController::class, 'room'])->name('room');
Route::get('/room-detail', [RoomController::class, 'roomDetail'])->name('room_detail');
Route::post('/search-room', [RoomController::class, 'searchRoom'])->name('search_room');


//news
Route::get('/news', [NewsController::class, 'news'])->name('news');


//login
Route::get('/login', [CustomerController::class, 'login'])->name('login');
Route::post('/post-login', [CustomerController::class, 'postLogin'])->name('postLogin');
//register
Route::get('/register', [CustomerController::class, 'register'])->name('register');
Route::post('/post-register', [CustomerController::class, 'postRegister'])->name('postRegister');



