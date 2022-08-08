<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use App\Models\galeri;
use Illuminate\Http\Request;

class TugasdpaController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('Services.tugasdpa', compact('adepartments', 'galeri'));
    }
}
