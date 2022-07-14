<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgalleryController extends Controller
{
    public function index(){
        return view('admin.gallery');
    }
}
