<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progja extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'progja_capres';
    protected $fillable = [
        'id_detail',
        'progja',
    ];

    public function detail_capres(){
        return $this->belongsTo(DetailCapres::class, 'id_detail', 'id');
    }
}
