<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function room()
    {       
        $room_list = DB::table("room_style")->Paginate(6);
        return view('room.room_page',compact('room_list'));
    }
    
    public function room_detail()
    {       
        $room_list = DB::table("room_style")->Paginate(6);
        return view('room.room_detail',compact('room_list'));
    }
}
