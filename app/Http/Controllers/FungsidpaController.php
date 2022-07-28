<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;

use Illuminate\Http\Request;

class FungsidpaController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        return view('Services.fungsidpa', ['adepartments' => Adepartment::index()]);
    }
}
