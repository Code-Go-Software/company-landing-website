<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('services');
    }

    public function team(){
        return view('team');
    }

    public function blog(){
        return view('blog');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function testimonials(){
        return view('testimonials');
    }

    public function pricing(){
        return view('pricing');
    }
}
