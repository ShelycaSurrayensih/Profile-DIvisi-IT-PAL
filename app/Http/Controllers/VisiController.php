<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index(){
        $visis = Visi::index();
        return view('visimisi.visi', ['visis' => Visi::index()]);
    }
  
}