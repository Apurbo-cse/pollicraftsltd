<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function about(){
        return view('Frontend.About.About');
    }
}
