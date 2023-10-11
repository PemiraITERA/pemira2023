<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCapres extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'detail_capres';
    protected $fillable = [
        'id_capres',
        'cv',
        'grand_design',
        'visi',
        'misi'
    ];

    public function capres(){
        return $this->belongsTo(Capres::class, 'id_capres', 'id');
    }
}
