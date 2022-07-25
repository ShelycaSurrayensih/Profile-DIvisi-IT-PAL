<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adepartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama'
    ];

    public static function index(){
        return Adepartment::all();
    }
}
