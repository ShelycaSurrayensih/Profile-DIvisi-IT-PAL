<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class FungsidpaController extends Controller
{
    public function index()
    {
        $services = Service::index();
        return view('Services.fungsidpa', ['services' => Service::index()]);
    }
}
