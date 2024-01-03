<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function login()
    {
        return view('auths.signin');
    }

    function postlogin(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        
        
        if(auth()->attempt($credentials)) {
            if(Auth::user()->role == 'user') {
                return redirect('/lostandfound');
            }else {
                return redirect('/homepageadmin');
            }
        }
        return redirect('auths.signin');
    }
    
    public function signup()
    {
        return view('auths.signup');    
    }

    public function register(Request $request)
    {
        // dd("hehe");  
        $credentials = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'contact' => 'required|min:12',
            'password' => 'required|min:8'
        ]);

        // dd($request);
           
        $data = $request->all();
        \App\Models\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'password' => Hash::make($data['password']),
            'role' => 'user'
          ]);
         
        return redirect("/login");
    }
    

    public function lockscreen()
    {
        return view('auths.lockscreen');    
    }
    public function logout()
    {
        Auth::logout();  
        return redirect('/login'); 
    }
}
