<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Lembagadesa extends Model
{
   protected $table = 'lembaga_desa';
    protected $primaryKey = 'lembaga_id';
    public $incrementing = true; // ✅ pastikan ada
    public $timestamps = false;  // ✅ biar gak error created_at

    protected $fillable = [
        'nama_lembaga',
        'deskripsi',
        'kontak',
            ];


}
