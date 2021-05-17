<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slide;
use App\Models\TeamMember;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home(){
        return view('index', [
            'slides' => Slide::all(),
            'services' => Service::all(),
            'categories' => Category::all(),
            'projects' => Project::all()
        ]);
    }

    public function about(){
        return view('about', [
            'members' => TeamMember::all()
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('services', [
            'services' => Service::all()
        ]);
    }

    public function team(){
        return view('team', [
            'members' => TeamMember::all()
        ]);
    }

    public function blog(){
        return view('blog', [
            'posts' => Post::all()
        ]);
    }

    public function post(Post $post){
        return view('blog-single', [
            'post' => $post
        ]);
    }

    public function portfolio(){
        return view('portfolio', [
            'categories' => Category::all(),
            'projects' => Project::all()
        ]);
    }

    public function project(Project $project){
        return view('project', [
            'project' => $project
        ]);
    }

    public function testimonials(){
        return view('testimonials', [
            'testimonials' => Testimonial::all()
        ]);
    }

}
