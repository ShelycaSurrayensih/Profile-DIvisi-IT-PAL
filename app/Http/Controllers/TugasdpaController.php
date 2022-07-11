<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TugasdpaController extends Controller
{
    public function index()
    {
        $services = Service::index();
        return view('Services.tugasdpa', ['services' => Service::index()]);
    }
}
