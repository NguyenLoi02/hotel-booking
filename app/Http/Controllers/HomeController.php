<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {     
        $room_list = DB::select('select * from room_style ');
        // dd($room_list);  
        return view('home_page');
    }
    public function room()
    {       
        $room_list = DB::table("room_style")->Paginate(6);
        return view('room.room_page',compact('room_list'));
    }
    public function news()
    {       
        $news_list = DB::table("news")->Paginate(8);
        return view('news.news_page',compact('news_list'));
    }
    public function room_detail()
    {       
        $room_list = DB::table("room_style")->Paginate(6);
        return view('detail_page',compact('room_list'));
    }
    
}
