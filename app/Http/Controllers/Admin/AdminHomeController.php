<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //
    public function adminHome(){
        return view('admin.admin_home_page');
    }
}
