<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    use HasFactory;
    protected $fillable = [
        'description'
    ];

    public static function index()
    {
        return Service::all();
    }
}
