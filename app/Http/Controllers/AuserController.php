<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuserController extends Controller
{
    public function index(){
        $user = Auth::user();
        $abc = User::all();
        //dd($user);
        return view('admin.user', compact('abc','user'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $input = $request->all();
        User::create($input);
        return redirect()->route('admin.user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(User $users)
    {
        $users = User::all();
        return view('user.edit', compact('users'));
    }


    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        return redirect()->route('admin.user')->with('success', 'Data Berhasil Diedit');
    }





    public function destroy($id)
    {
        User::find($id)->delete();
        // Alert::toast('Product berhasil dihapus.', 'success');
        return redirect()->route('admin.user')->with('success','Data berhasil Dihapus');
    }
}
