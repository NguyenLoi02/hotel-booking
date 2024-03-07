<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {     
        $room_list = DB::table("room_style")->Paginate(6);
        // dd($room_list);  
        return view('home_page',compact('room_list'));
    }
    
    
    
}
