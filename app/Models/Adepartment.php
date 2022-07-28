<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adepartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kedudukan',
        'organisasi1',
        'organisasi2',
        'tugas1',
        'tugas2',
        'fungsi1',
        'fungsi2',
        'fungsi3',
        'fungsi4',
        'fungsi5',
        'fungsi6',
    ];

    public static function index(){
        return Adepartment::all();
    }
}
