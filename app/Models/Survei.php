<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    use HasFactory;
    protected $table = "Survei";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_kelurahan',
        'nama_survei',
        'total_target',
        'total_petugas',
        'total_pengawas',
        'jh_penyelesaian',
        'target_petugas',
    ];
}
