<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class KedudukandpaController extends Controller
{
    public function index()
    {
        $services = Service::index();
        return view('Services.kedudukandpa', ['services' => Service::index()]);
    }
}
