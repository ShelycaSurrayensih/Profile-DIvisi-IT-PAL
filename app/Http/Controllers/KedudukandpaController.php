<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use Illuminate\Http\Request;

class KedudukandpaController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        return view('Services.kedudukandpa', ['adepartments' => Adepartment::index()]);
    }
}
