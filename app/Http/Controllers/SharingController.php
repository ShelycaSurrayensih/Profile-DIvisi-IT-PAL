<?php

namespace App\Http\Controllers;

use App\Models\Sharing;
use Illuminate\Http\Request;

class SharingController extends Controller
{
    public function index()
    {
        $sharings = Sharing::index();
        return view('Services.sharing', ['sharing' => Sharing::index()]);
    }
}
