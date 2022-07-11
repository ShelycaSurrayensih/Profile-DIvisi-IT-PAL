<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class FungsidihController extends Controller
{
    public function index()
    {
        $services = Service::index();
        return view('Services.fungsidih', ['services' => Service::index()]);
    }
}
