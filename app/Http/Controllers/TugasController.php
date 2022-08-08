<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\Service;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $services = Service::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('Services.tugastanggungjawab', compact('services', 'galeri'));
    }
}
