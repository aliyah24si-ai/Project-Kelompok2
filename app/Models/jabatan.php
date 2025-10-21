<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Lembagadesa extends Model
{
    use HasFactory;

    protected $table = 'lembaga_desa';
    protected $primaryKey = 'lembaga_id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'nama_lembaga',
        'deskripsi',
        'kontak',
    ];
}
