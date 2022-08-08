<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\galeri;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = contact::index();
        $galeri = Galeri::latest()->paginate(9);
        return view('contact.contacts', compact('contacts', 'galeri'));
    }
}
