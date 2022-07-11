<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $services = Service::index();
        return view('Services.tugastanggungjawab', ['services' => Service::index()]);
    }
}
