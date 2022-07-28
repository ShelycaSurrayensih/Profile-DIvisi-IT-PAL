<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;

use Illuminate\Http\Request;

class FungsidihController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        return view('Services.fungsidih', ['adepartments' => Adepartment::index()]);
    }
}
