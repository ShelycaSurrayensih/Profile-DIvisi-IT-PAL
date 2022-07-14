<?php

namespace App\Http\Controllers;

use App\Models\Sharing;
use Illuminate\Http\Request;

class AsharingController extends Controller
{
    public function index(){
        return view('admin.sharing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'decription' => 'required',
            'tanggal_dibuat' => 'required'
        ]);
        Sharing::create([
            'judul' => $request->judul,
            'description' => $request->description,
            'tanggal_dibuat' => $request->tanggal_dibuat,
        ]);
        return redirect()->route('admin.sharing');
    }

    public function edit(Sharing $sharings)
    {
        $sharings = Sharing::all();
        return view('sharing.edit', compact('sharings'));
    }
    
    
    public function update(Request $request, Sharing $sharings)
    {
        //
    }



    

    public function destroy(Sharing $sharings)
    {
        $sharings->delete();
        Alert::toast('Product berhasil dihapus.', 'success');
        return redirect()->back();
    }
}
