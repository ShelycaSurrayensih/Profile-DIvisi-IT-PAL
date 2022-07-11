<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class KedudukandihController extends Controller
{
    public function index()
    {
        $services = Service::index();
        return view('Services.kedudukandih', ['services' => Service::index()]);
    }
}
