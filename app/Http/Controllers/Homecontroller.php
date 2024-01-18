<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Messages;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function blogs(){
        $blogs = Blogs::simplePaginate(5);
        $context = ["blogs"=> $blogs];
        return view('blogs',$context);
    }

    public function services(){
        return view('services');
    }

    public function createmessage(){
        $validated=request()->validate([
            "name"=>"required",
            "email"=>"required|email",
            "message"=>"required|min:10|max:120"
        ]);

        Messages::create($validated);

        return redirect()->route("index")->with(["message"=>"Message Sent Successfully"]);
    }
}
