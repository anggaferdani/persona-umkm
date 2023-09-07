<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\BrandPersonalityAakerResult;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandPersonalityAaker extends Model
{
    use HasFactory;

    protected $table = 'brand_personality_aakers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'sincerity_hangat_dan_ramah',
        'sincerity_penuh_kasih_sayang',
        'sincerity_tulus',
        'sincerity_jujur',
        'sincerity_dapat_dipercaya',
        'competence_andal',
        'competence_terpercaya',
        'competence_memiliki_reputasi_yang_baik',
        'competence_berkinerja_baik',
        'competence_memberikan_nilai',
        'excitement_inovatif',
        'excitement_menarik',
        'excitement_penuh_semangat',
        'excitement_menyenangkan',
        'excitement_selalu_ada_yang_baru',
        'sophistication_elegan',
        'sophistication_berkelas',
        'sophistication_bergaya',
        'sophistication_canggih',
        'sophistication_mewah',
        'ruggedness_tangguh',
        'ruggedness_berkelas',
        'ruggedness_mandiri',
        'ruggedness_berani',
        'ruggedness_tidak_takut_mengambil_risiko',
        'average_sincerity',
        'average_competence',
        'average_excitement',
        'average_sophistication',
        'average_ruggedness',
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

    public function brand_personality_aaker_results(){
        return $this->hasMany(BrandPersonalityAakerResult::class);
    }
}
