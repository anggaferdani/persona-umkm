<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use App\Models\BrandPersonalityAaker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandPersonalityAakerResult extends Model
{
    use HasFactory;

    protected $table = 'brand_personality_aaker_results';

    protected $primaryKey = 'id';

    protected $fillable = [
        'bpa_id',
        'brand_personality_aaker',
        'result',
        'status',
        'created_by',
        'updated_by',
    ];

    protected static function booted(){
        static::creating(function($model){
            $model->created_by = Auth::id();
            $model->updated_by = Auth::id();
        });

        static::saving(function($model){
            $model->updated_by = Auth::id();
        });
    }

    public function brand_personality_aakers(){
        return $this->belongsTo(BrandPersonalityAaker::class, 'bpa_id');
    }
}
