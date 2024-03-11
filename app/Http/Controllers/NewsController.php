<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function news()
    {       
        $news_list = DB::table("news")->Paginate(8);
        return view('news.news_page',compact('news_list'));
    }
    
}
