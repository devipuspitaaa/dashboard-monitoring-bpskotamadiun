<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = "Petugas";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_lengkap',
        'no_ktp',
        'jenis_kelamin',
        'tempat_tanggal_lahir',
        'no_tlp',
        'alamat',
        'nip',
    ];
}
