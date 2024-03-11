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
    public function searchRoom(Request $request)
    {      

        $searchTerm = $request->input('search');
        $check_in = $request->input('check_in');
        $check_out = $request->input('check_out');
        // dd($ngayden);
        $search_room_list = DB::table("room_style")->where('name', 'like', '%' . $searchTerm . '%')->Paginate(6); 
        // $search_room_list = DB::table("booking_details")
        // ->where(DB::raw("DATE_FORMAT(check_out, '%Y-%m-%d')"), '>', $check_in)
        // ->paginate(6);
        // dd($search_room_list);
        return view('room.search_room', compact('search_room_list')); 
    
    }
}
