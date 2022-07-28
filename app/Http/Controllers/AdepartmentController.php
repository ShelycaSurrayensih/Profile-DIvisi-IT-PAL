<?php

namespace App\Http\Controllers;

use App\Models\Adepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdepartmentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $department = Adepartment::all();
        return view('admin.department', compact('user', 'department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kedudukan' => 'required',
            'organisasi1' => 'required',
            'organisasi2' => 'required',
            'tugas1' => 'required',
            'tugas2' => 'required',
            'fungsi1' => 'required',
            'fungsi2' => 'required',
            'fungsi3' => 'required',
            'fungsi4' => 'required',
            'fungsi5' => 'required',
            'fungsi6' => 'required',
        ]);
        $input = $request->all();
        Adepartment::create($input);
        return redirect()->route('admin.department')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Adepartment $adepartments)
    {
        $adepartments = Adepartment::all();
        return view('adepartment.edit', compact('adepartment'));
    }

    public function update(Request $request, $id)
    {
        Adepartment::find($id)->update([
            'nama' => $request->nama,
            'kedudukan' => $request->kedudukan,
            'organisasi1' => $request->organisasi1,
            'organisasi2' => $request->organisasi2,
            'tugas1' => $request->tugas1,
            'tugas2' => $request->tugas2,
            'fungsi1' => $request->fungsi1,
            'fungsi2' => $request->fungsi2,
            'fungsi3' => $request->fungsi3,
            'fungsi4' => $request->fungsi4,
            'fungsi5' => $request->fungsi5,
            'fungsi6' => $request->fungsi6,
        ]);
        $input = $request->all();

        Adepartment::find($id)->update($input);
        return redirect()->route('admin.department')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        Adepartment::find($id)->delete();
        return redirect()->route('admin.department')->with('success', 'Data Berhasil Dihapus');
    }
}
