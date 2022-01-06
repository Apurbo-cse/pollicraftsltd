<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Details extends Controller
{
    public function details(){
        return view('Frontend.Details.Details');
    }
}
