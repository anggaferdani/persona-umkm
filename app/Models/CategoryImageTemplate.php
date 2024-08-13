<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryImageTemplate extends Model
{
    use HasFactory;

    protected $table = 'category_image_templates';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function imageTemplates(){
        return $this->hasMany(ImageTemplate::class);
    }
}
