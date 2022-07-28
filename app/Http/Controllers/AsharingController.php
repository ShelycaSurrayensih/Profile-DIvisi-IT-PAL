<?php

namespace App\Http\Controllers;

use App\Models\Sharing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsharingController extends Controller
{
    public function index(){
        $user = Auth::user();
        $sharing = Sharing::all();
        return view('admin.sharing', compact('user', 'sharing'));
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
    }

    public function edit(Sharing $sharings)
    {
        $sharings = Sharing::all();
        return view('sharing.edit', compact('sharings'));
    }


    public function update(Request $request, $id)
    {
        Sharing::find($id)->update([
            'judul'=>$request->judul,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.sharing')->with('success', 'Data Berhasil Diedit');
    }





    public function destroy($id)
    {
        Sharing::find($id)->delete();
        // Alert::toast('Product berhasil dihapus.', 'success');
        return redirect()->route('admin.sharing')->with('success','Data berhasil Dihapus');
    }
}
