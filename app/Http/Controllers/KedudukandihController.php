<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use Illuminate\Http\Request;

class KedudukandihController extends Controller
{
    public function index()
    {
        $adepartments = Adepartment::index();
        return view('Services.kedudukandih', ['adepartments' => Adepartment::index()]);
    }
}
