<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedung extends Model
{
    use HasFactory;
    protected $table = 'gedung';
    protected $guarded = ['id'];
    protected $fillable = [
        'gedung',
        'tgl',
        'foto'
    ];
}
