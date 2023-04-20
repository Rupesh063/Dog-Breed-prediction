<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PagesController extends Controller
{
    public function home()
    {
        $recentPosts = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('home', [
            'recentPosts' => $recentPosts
        ]);
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
