<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {       
        return view('home_page');
    }
    public function room()
    {       
        return view('room.room_page');
    }
    public function news()
    {       
        return view('news.news_page');
    }
}
