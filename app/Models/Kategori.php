<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kategori',
        'nama_kategori'
    ];

    public static function index()
    {
        return Kategori::all();
    }
    // public static function store(Request $request)
    // {
    //     Kategori::store($request->all());
    // }
}
