<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageTemplate extends Model
{
    use HasFactory;

    protected $table = 'image_templates';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function categoryImageTemplate(){
        return $this->belongsTo(CategoryImageTemplate::class, 'category_image_template_id');
    }

    public function temporaryImages(){
        return $this->hasMany(TemporaryImage::class);
    }
}
