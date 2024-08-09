<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'requests';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detailProduk(){
        return $this->belongsTo(DetailProduk::class, 'detail_produk_id');
    }

    public function responses(){
        return $this->hasMany(Response::class);
    }
}
