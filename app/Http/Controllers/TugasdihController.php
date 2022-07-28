<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use Illuminate\Http\Request;

class TugasdihController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        return view('Services.tugasdih', ['adepartments' => Adepartment::index()]);
    }
}
