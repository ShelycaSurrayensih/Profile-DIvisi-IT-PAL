<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TugasdihController extends Controller
{
    public function index()
    {
        $services = Service::index();
        return view('Services.tugasdih', ['services' => Service::index()]);
    }
}
