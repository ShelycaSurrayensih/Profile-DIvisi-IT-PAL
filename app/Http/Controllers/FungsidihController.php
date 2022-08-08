<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use App\Models\galeri;
use Illuminate\Http\Request;

class FungsidihController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('Services.fungsidih', compact('adepartments', 'galeri'));
    }
}
