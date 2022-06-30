<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    public function index()
    {
        $structures = Structure::index();
        return view('structure.structurediv', ['structures' => Structure::index()]);
    }
}
