<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index(){
        $visis = Visi::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('visimisi.visi', compact('visis', 'galeri'));
    }

}
