<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'foto',
        'alamat',
        'no_telepon',
        'deskripsi',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
