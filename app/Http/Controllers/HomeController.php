<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return view('post.all')->withPosts(Post::getAll());
        }

        return redirect('auth/login');
    }
}
