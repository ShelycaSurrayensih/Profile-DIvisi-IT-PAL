<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sharing extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'description',
        'tanggal_dibuat'
    ];

    public static function index()
    {
        return Sharing::all();
    }

}
