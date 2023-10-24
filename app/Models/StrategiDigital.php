<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategiDigital extends Model
{
    use HasFactory;
    protected $table = 'strategi_digitals';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'live_stream',
        'cod',
        'promo',
        'ekspor',
        'iklan',
        'jenis_product',
        'tag1', 
        'tag2',
        'tag3',
        'tag4',
        'tag5',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
