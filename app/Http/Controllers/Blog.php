<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    public function blog(){
        return view('Frontend.Blog.BlogP');
    }

    public function blog_details(){
        return view('Frontend.Blog.BlogDetails');
    }
}
