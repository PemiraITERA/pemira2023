<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;
    protected $table = 'Program_studi';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_prodi',
        'gedung_pemilihan',
        'waktu_pemilihan',
    ];

}


