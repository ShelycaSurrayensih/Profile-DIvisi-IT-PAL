<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsharingController extends Controller
{
    public function index(){
        return view('admin.sharing');
    }
}
