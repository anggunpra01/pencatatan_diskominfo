<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function register()
    {
        return view('register.register',['title'=> 'register']);
    }

    public function store_register(Request $request){
        $validatedDate = $request->validate([
            'nip' => 'required|max:18|min:18',
            'username' => 'required',
            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'nama_bidang' => 'required',
            'hak_akses' => 'required',
            'no_hp' => 'required',
            'password' => 'required|min:6',
        ]);

        $validatedDate['password'] = bcrypt($validatedDate['password']);

        User::create($validatedDate);

        $request->accepts('session');
        session()->flash('success', 'Berhasil menambahkan user!');

        return redirect('/login');
    }
    public function login()
    {
        return view('register.login',['title'=> 'login']);
    }
    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
        'nip'=>'required|max:18|min:18',
        'password'=> 'required|max:6|min:6'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
    
    
}

