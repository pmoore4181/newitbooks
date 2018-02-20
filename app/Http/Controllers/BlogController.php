<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    // show blog index
    public function index()
    {
    	$blogs = Blog::all();
    	return view('blog.index', compact('blogs'));
    }
}
