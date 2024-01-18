<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Messages;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        $users = User::latest()->limit(10)->get();
        $messages=Messages::latest()->limit(10)->get();
        return view('admin.index',["messages"=>$messages,"users"=>$users]);
    }
    
    public function services(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        $services=Services::all();
        return view('admin.services',["services"=>$services]);
    }
    
    public function messages(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        $messages=Messages::all();
        return view('admin.messages',["messages"=>$messages]);
    }
    
    public function blogs(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        $blogs=Blogs::all();
        return view('admin.blogs',["blogs"=>$blogs]);
    }
    
    public function users(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        $users = User::all();
        return view('admin.users',["users"=>$users]);
    }


    //CREATE FUNCTIONS
    public function createblog(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        return view("admin.create.blogs");
    }

    public function addblog(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }


        $validated = request()->validate([
            "blogname"=>"required|min:3",
            "blogtext"=>"required|min:20",
        ]);

        Blogs::create($validated);

        return redirect()->route("admin-index")->with(["message"=>"New blog added successfully"]);
    }
    
    public function createservice(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        return view("admin.create.service");
    }

    public function addservice(){
        if(!auth()->user()){
            return redirect()->route("index")->with(["message"=>"Forbidden"]);
        }
        if(!(auth()->user()->usertype==1)){
            return redirect()->route("index")->with(["message"=>"Unauthorised"]);
        }

        $validated = request()->validate([
            "servicename"=>"required|min:3",
            "servicedescription"=>"required|min:20",
        ]);

        Services::create($validated);

        return redirect()->route("admin-index")->with(["message"=>"New service added successfully"]);
    }
    
}
