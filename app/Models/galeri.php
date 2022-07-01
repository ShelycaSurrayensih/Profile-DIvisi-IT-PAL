<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan',
        'gambar',
    ];
    public static function index()
    {
        return Galeri::all();
    }
}
