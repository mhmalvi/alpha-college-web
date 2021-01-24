<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Apps landing page
     */
    public function index(){
        return view('home');
    }


    /**
     * About us page
     */
    public function about(){
        return view('pages.about');
    }


    /**
     * Blog Page
     */
    public function blog(){
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);
        return view('pages.blogs', compact('blogs'));
    }


    /**
     * Blog Details
     */
    public function blogDetails($slug){
        $blog = Blog::where('blog_slug', $slug)->first();
        return view('pages.viewBlog', compact('blog'));
    }


    /**
     * Contact Us page
     */
    public function contact(){
        return view('pages.contact');
    }
}
