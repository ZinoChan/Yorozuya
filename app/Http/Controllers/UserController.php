<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    //Register User
    public function create(){
        return view('users.register');
    }
    

    //Create User
    public function store(Request $request){
        $formFields = $request->validate([
            'email' => 'required|email:rfc,dns|unique:users,email',
            'name' => 'required|min:3',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('success', 'sign up successfully');
        
    }

    //Logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout successfully');
    }
    
    //Login user page
    public function login(){
       return view('users.login');
    }
    
    //Login user
    public function authenticate(Request $request){
        $formFields = $request->validate([
 'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('success', 'logged in successfully');
        }
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
