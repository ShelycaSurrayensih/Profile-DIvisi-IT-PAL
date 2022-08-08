<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(9);
        return view('Services.layananti', compact('galeri'));
    }
}
