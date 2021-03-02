<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['projects' => Projects::projects()]);
    }
    // public function index()
    // {
    //     $posts = Post::where('draft', false)
    //         ->orderBy('id', 'desc')
    //         ->paginate(5);
    //     return view('home', ['posts' => $posts]);
    // }

    // public function show($slug)
    // {
    //     $post = Post::where([
    //         'slug' => $slug,
    //         'draft' => false,
    //     ])->first();
    //     return view('projectDetail', ['post' => $post]);
    // }
}
