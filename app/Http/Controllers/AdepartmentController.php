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

    public function destroy($id)
    {
        Adepartment::find($id)->delete();
        return redirect()->route('admin.department')->with('success', 'Data Berhasil Dihapus');
    }
}
