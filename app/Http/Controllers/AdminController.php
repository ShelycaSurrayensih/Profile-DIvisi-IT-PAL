<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // $admin = admin::index();
        return view('admin.index');
    }
}
