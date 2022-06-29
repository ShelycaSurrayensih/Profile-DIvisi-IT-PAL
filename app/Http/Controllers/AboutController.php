<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::index();
        return view('about.aboutus', ['abouts' => About::index()]);
    }
  
}

