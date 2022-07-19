<?php

namespace App\Http\Controllers;

use App\Models\Sharing;
use Illuminate\Http\Request;

class AsharingController extends Controller
{
    public function index(){
        $sharings = Sharing::all();
        return view('admin.sharing', ['sharing' => $sharings]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'description'=>'required',
            'tanggal_dibuat'=>'required',
        ]);
        $input = $request->all();
        Sharing::create($input);
        return redirect()->route('admin.sharing')->with('success', 'Data Berhasil Ditambahkan');
        // $request->validate([
        //     'judul' => 'required',
        //     'decription' => 'required',
        //     'tanggal_dibuat' => 'required'
        // ]);
        // Sharing::create([
        //     'judul' => $request->judul,
        //     'description' => $request->description,
        //     'tanggal_dibuat' => $request->tanggal_dibuat,
        // ]);
        // return redirect()->back('admin.sharing');
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





    public function destroy($id)
    {
        Sharing::find($id)->delete();
        // Alert::toast('Product berhasil dihapus.', 'success');
        return redirect()->route('admin.sharing')->with('success','Data berhasil Dihapus');
    }
}
