<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function signup(){
        return view('auth.signup');
    }

    public function signin(){
        $validated=request()->validate([
            "email"=>"required|email",
            "password"=>"required|min:3|max:12"
        ]);

        $user=User::where('email',$validated['email'])->get();

        // dd($user);

        if(!($user->count()>0)){
            return back()->with(["message"=>"User does not exist"]);
        }else{
            $user=$user[0];
            if(!(Hash::check(($validated['password']), $user['password']))){
                return back()->with(["message"=>"Invalid credentials"]);
            }

        }

        if(!(auth()->attempt($validated))){
            return back()->with(["message"=>"Unable to log in"]);
        }
        
        return redirect()->route("index")->with(["message"=>"Login Successful"]);
    }

    public function register(Request $request){
        $validated=$request->validate([
            "firstname"=>"required|min:4",
            "surname"=>"required|min:4",
            "email"=>"required|email|unique:users,email",
            "password"=>"required|min:3|max:12|confirmed"
        ]);


        $validated['password']= Hash::make($validated['password']);
        $user=User::create($validated);

        auth()->login($user);

        return redirect()->route("index")->with(["message"=>"Login Successful"]);
    }

    public function logout(){
        auth()->logout();
        return redirect()->route("index")->with(["message"=>"You have been logged out"]);
    }

}
