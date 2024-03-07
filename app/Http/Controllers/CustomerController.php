<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AutoGenID\AutoIDFunction;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class CustomerController extends Controller
{
    //
    public function login()
    {       
        return view('login');
    }
    
    
    public function postLogin(Request $request)
    {      
        $validator = Validator::make($request->all(), [
            'Email' => 'required|email',
            'Password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } // Attempt to authenticate the user
        $email = $request-> Email;
        $password = $request-> Password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed
            return redirect()->route('home');
        }
    
        // Authentication failed
        throw ValidationException::withMessages([
            'email' => [__('auth.failed')],
        ]);
    }

    public function register()
    {       
        return view('register');
    }
    public function postRegister(Request $request)
    {       

        $validator = Validator::make($request->all(), [
            'Email' => 'required|email|unique:user',
            'HoDem' => 'required|string|max:255',
            'Ten' => 'required|string|max:255',
            'Password' => 'required|min:6',
            'ComfirmPass' => 'required|same:Password',
        ]);
        //dd($request->all());
        if ($validator->fails()) {
            
        }

        // Tạo người dùng mới
        $autoID = new AutoIDFunction();
        $next = $autoID->AutoID('U', User::class, 'user_id');
        $user = new User;
        $user->user_id = $next;
        $user->last_name = $request->input('HoDem');
        $user->first_name = $request->input('Ten');
        $user->email  = $request->input('Email');
        $user->password = bcrypt($request->input('Password'));
        $user->save();

        // Đăng nhập người dùng mới
        auth()->login($user);

        // Chuyển hướng người dùng sau khi đăng ký thành công
        return redirect()->route('login');
    }
}
