<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;

    protected $table = 'jenis_produks';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function detailProduks(){
        return $this->hasMany(DetailProduk::class);
    }
}
