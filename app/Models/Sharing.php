<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sharing extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'description',
        'gambar',
        'tanggal_dibuat'
    ];

    public static function index()
    {
        return Sharing::all();
    }
    // public static function store(Request $request)
    // {
    //     Sharing::store($request->all());
    // }

}
