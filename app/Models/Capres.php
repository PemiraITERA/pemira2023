<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capres extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'capres';
    protected $fillable = [
        'nama_capres',
        'nim',
        'prodi'
    ];

    public function detail_capres(){
        return $this->hasMany(DetailCapres::class);
    }
}


