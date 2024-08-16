<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryImage extends Model
{
    use HasFactory;

    protected $table = 'temporary_images';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function imageTemplate(){
        return $this->belongsTo(ImageTemplate::class, 'image_template_id');
    }
    
    public function response(){
        return $this->belongsTo(Response::class, 'response_id');
    }
}
