<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use App\Models\galeri;
use Illuminate\Http\Request;

class FungsidpaController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('Services.fungsidpa', compact('adepartments', 'galeri'));
    }
}
