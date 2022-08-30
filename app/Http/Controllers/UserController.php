<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function login()
    {
        return view('register.login',['title'=> 'login']);
    }

    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
        'nip'=>'required|max:18|min:18',
        'password'=> 'required|max:18|min:8'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/kehadiran');
        }

        return back()->with('loginError','login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
    public function register()
    {
        return view('register.register',['title'=> 'register', 'active=>register']);
    }
    
}

