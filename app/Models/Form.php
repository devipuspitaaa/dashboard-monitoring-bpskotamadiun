<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = "Form";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_kelurahan',
        'nama_survei',
        'total_target',
        'ttl_target_revisi',
        'total_petugas',
        'ttl_petugas_revisi',
        'jh_penyelesaian',
        'jhp_revisi',
        'target_petugas',
    ];
}
