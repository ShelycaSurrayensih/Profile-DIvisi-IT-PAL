<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use App\Models\galeri;
use Illuminate\Http\Request;

class TugasdihController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('Services.tugasdih', compact('adepartments', 'galeri'));
    }
}
