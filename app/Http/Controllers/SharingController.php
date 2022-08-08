<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\Sharing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SharingController extends Controller
{
    public function index()
    {
        $sharings = Sharing::orderByDesc('created_at')->get();
        $galeri = Galeri::latest()->paginate(9);
        return view('Services.sharing', compact('sharings', 'galeri'));
    }

    public function show($id)
    {
        $sharings = Sharing::where('id', $id)->first();
        return view('Services.detail', ['sharings' => $sharings]);
    }

}
