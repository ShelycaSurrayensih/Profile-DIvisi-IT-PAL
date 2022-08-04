<?php

namespace App\Http\Controllers;

use App\Models\Sharing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AsharingController extends Controller
{
    public function index(){
        $user = Auth::user();
        $sharing = Sharing::all();
        $sharing = DB::table('sharings')->orderBy('id', 'desc')->cursorPaginate(10);
        return view('admin.sharing', compact('user', 'sharing'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'description'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_dibuat'=>'required',
        ]);
        $input = $request->all();
        $data = Sharing::create($input);
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
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
        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        } else {
            unset($input['gambar']);
        }
        Sharing::find($id)->update($input);
        return redirect()->route('admin.sharing')->with('success', 'Data Berhasil Diedit');
    }





    public function destroy($id)
    {
        $gambar = Sharing::find($id);
        unlink("images.".$gambar->gambar);
        Sharing::find($id)->delete();
        // Alert::toast('Product berhasil dihapus.', 'success');
        return redirect()->route('admin.sharing')->with('success','Data berhasil Dihapus');
    }
}
