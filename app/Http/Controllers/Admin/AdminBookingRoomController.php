<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBookingRoomController extends Controller
{
    //
    public function adminBookingRoom(){
        return view("admin.booking_manage.booking_room");
    }
    public function adminBookedRoom(){
        return view("admin.booking_manage.booked_room");
    }
}
