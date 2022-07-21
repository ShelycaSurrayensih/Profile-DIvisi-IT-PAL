<?php

namespace App\Http\Controllers;

use App\Models\Sharing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SharingController extends Controller
{
    public function index()
    {
        $sharings = Sharing::orderByDesc('created_at')->get();
        return view('Services.sharing', compact('sharings'));
    }

    public function show($id)
    {
        $sharings = Sharing::where('id', $id)->first();
        return view('Services.detail', ['sharings' => $sharings]);
    }

}