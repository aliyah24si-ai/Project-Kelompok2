<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 8364eee21da8a0fc2cb611f42dd0586210517965
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD

    protected $fillable = [
        'name',
        'price' ,
        'description',
        'image'
=======
    use HasFactory;

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
>>>>>>> 8364eee21da8a0fc2cb611f42dd0586210517965
    ];
}
