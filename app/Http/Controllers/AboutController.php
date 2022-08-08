<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\galeri;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('about.aboutus', compact('abouts', 'galeri'));
    }

}

