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
            'dokumen'=>'mimes:pdf',
            'tanggal_dibuat'=>'required',
        ]);
        $input = $request->all();
        $data = Sharing::create($input);

        $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
        $data->gambar = $request->file('gambar')->getClientOriginalName();
        $request->file('dokumen')->move('dokument/', $request->file('dokumen')->getClientOriginalName());
        $data->dokumen = $request->file('dokumen')->getClientOriginalName();
        $data->save();
        return redirect()->route('admin.sharing')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Sharing $sharings)
    {
        $sharings = Sharing::all();
        return view('sharing.edit', compact('sharings'));
    }


    public function update(Request $request, $id)
    {
        $input3 = Sharing::find($id);
        $input3->judul = $request->get('judul');
        $input3->description = $request->get('description');
        // Sharing::find($id)->update([
        //     'judul'=>$request->judul,
        //     'description'=>$request->description,
        // ]);
        $input = $request->image;
        if ($image = $request->file('gambar')) {
            $destinationPath = 'images/';
            $profileImage = $image->getClientOriginalName().".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $input['gambar'] = "$profileImage";
            $input3->gambar = $profileImage;
        } else {
            unset($input['gambar']);
        }
        $input2 = $request->dokumen;
        if ($dokumen = $request->file('dokumen')) {
            $destinationPath = 'dokument/';
            $profileDokumen = $dokumen->getClientOriginalName().".".$dokumen->getClientOriginalExtension();
            $dokumen->move($destinationPath, $profileDokumen);
            $input3->dokumen = $profileDokumen;
            // $input2['dokumen'] = "$profileDokumen";
        } else {
            unset($input2['dokumen']);
        }
        // $input3->image = $input;
        // $input3->dokumen = $input2;
        $input3->save();
        // Sharing::find($id)->update([]);
        return redirect()->route('admin.sharing')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        $gambar = Sharing::find($id);
        unlink("images/".$gambar->gambar);
        unlink('dokument/'.$gambar->dokumen);
        Sharing::find($id)->delete();
        return redirect()->route('admin.sharing')->with('success','Data berhasil Dihapus');
    }
}
