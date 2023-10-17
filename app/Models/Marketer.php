<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    use HasFactory;
    protected $table = 'marketers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'cv',
        'link_portofolio_1',
        'link_portofolio_2',
        'link_portofolio_3',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
