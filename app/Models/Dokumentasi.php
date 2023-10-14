<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $table = 'Dokumentasi';
    protected $guarded = ['id'];
    protected $fillable = ['foto'];

}


