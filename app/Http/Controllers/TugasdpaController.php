<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use Illuminate\Http\Request;

class TugasdpaController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        return view('Services.tugasdpa', ['adepartments' => Adepartment::index()]);
    }
}
