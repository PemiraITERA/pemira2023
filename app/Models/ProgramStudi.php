<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;
    protected $table = 'ormawa';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_ormawa',
        'foto',
    ];

}


