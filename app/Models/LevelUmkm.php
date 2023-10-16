<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelUmkm extends Model
{
    use HasFactory;
    protected $table = 'level_umkms';
    protected $primaryKey = 'id';

    protected $fillable = [
        'merk',
        'whatsapp_bisnis',
        'gbusiness',
        'landing_page',
        'sosmed',
        'ecommerce',
        'team',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
