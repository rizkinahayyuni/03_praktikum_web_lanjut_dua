<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    return view('blog', ['blogs' => Blogs::blogs()]);
    }
}
