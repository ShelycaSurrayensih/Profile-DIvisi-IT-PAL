<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    public function index()
    {
        $structures = Structure::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('structure.structurediv', compact('structures', 'galeri'));
    }
}
