<?php

namespace App\Http\Livewire\BrandPersonalityAakers;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\BrandPersonalityAaker as BrandPersonalityAakerModel;
use App\Models\BrandPersonalityAakerResult;

class BrandPersonalityAaker extends Component
{
    public $sincerity_hangat_dan_ramah;
    public $sincerity_penuh_kasih_sayang;
    public $sincerity_tulus;
    public $sincerity_jujur;
    public $sincerity_dapat_dipercaya;
    public $competence_andal;
    public $competence_terpercaya;
    public $competence_memiliki_reputasi_yang_baik;
    public $competence_berkinerja_baik;
    public $competence_memberikan_nilai;
    public $excitement_inovatif;
    public $excitement_menarik;
    public $excitement_penuh_semangat;
    public $excitement_menyenangkan;
    public $excitement_selalu_ada_yang_baru;
    public $sophistication_elegan;
    public $sophistication_berkelas;
    public $sophistication_bergaya;
    public $sophistication_canggih;
    public $sophistication_mewah;
    public $ruggedness_tangguh;
    public $ruggedness_berkelas;
    public $ruggedness_mandiri;
    public $ruggedness_berani;
    public $ruggedness_tidak_takut_mengambil_risiko;

    public function createBrandPersonalityAaker(){
        try{
            $this->validate([
                'sincerity_hangat_dan_ramah' => 'required',
                'sincerity_penuh_kasih_sayang' => 'required',
                'sincerity_tulus' => 'required',
                'sincerity_jujur' => 'required',
                'sincerity_dapat_dipercaya' => 'required',
                'competence_andal' => 'required',
                'competence_terpercaya' => 'required',
                'competence_memiliki_reputasi_yang_baik' => 'required',
                'competence_berkinerja_baik' => 'required',
                'competence_memberikan_nilai' => 'required',
                'excitement_inovatif' => 'required',
                'excitement_menarik' => 'required',
                'excitement_penuh_semangat' => 'required',
                'excitement_menyenangkan' => 'required',
                'excitement_selalu_ada_yang_baru' => 'required',
                'sophistication_elegan' => 'required',
                'sophistication_berkelas' => 'required',
                'sophistication_bergaya' => 'required',
                'sophistication_canggih' => 'required',
                'sophistication_mewah' => 'required',
                'ruggedness_tangguh' => 'required',
                'ruggedness_berkelas' => 'required',
                'ruggedness_mandiri' => 'required',
                'ruggedness_berani' => 'required',
                'ruggedness_tidak_takut_mengambil_risiko' => 'required',
            ]);
    
            $sincerity = [
                $this->sincerity_hangat_dan_ramah,
                $this->sincerity_penuh_kasih_sayang,
                $this->sincerity_tulus,
                $this->sincerity_jujur,
                $this->sincerity_dapat_dipercaya,
            ];
    
            $average_sincerity = array_sum($sincerity) / count($sincerity);
    
            $competence = [
                $this->competence_andal,
                $this->competence_terpercaya,
                $this->competence_memiliki_reputasi_yang_baik,
                $this->competence_berkinerja_baik,
                $this->competence_memberikan_nilai,
            ];
    
            $average_competence = array_sum($competence) / count($competence);
    
            $excitement = [
                $this->excitement_inovatif,
                $this->excitement_menarik,
                $this->excitement_penuh_semangat,
                $this->excitement_menyenangkan,
                $this->excitement_selalu_ada_yang_baru,
            ];
    
            $average_excitement = array_sum($excitement) / count($excitement);
    
            $sophistication = [
                $this->sophistication_elegan,
                $this->sophistication_berkelas,
                $this->sophistication_bergaya,
                $this->sophistication_canggih,
                $this->sophistication_mewah,
            ];
    
            $average_sophistication = array_sum($sophistication) / count($sophistication);
    
            $ruggedness = [
                $this->ruggedness_tangguh,
                $this->ruggedness_berkelas,
                $this->ruggedness_mandiri,
                $this->ruggedness_berani,
                $this->ruggedness_tidak_takut_mengambil_risiko,
            ];
    
            $average_ruggedness = array_sum($ruggedness) / count($ruggedness);
    
            $brand_personality_aaker = BrandPersonalityAakerModel::create([
                'sincerity_hangat_dan_ramah' => $this->sincerity_hangat_dan_ramah,
                'sincerity_penuh_kasih_sayang' => $this->sincerity_penuh_kasih_sayang,
                'sincerity_tulus' => $this->sincerity_tulus,
                'sincerity_jujur' => $this->sincerity_jujur,
                'sincerity_dapat_dipercaya' => $this->sincerity_dapat_dipercaya,
                'competence_andal' => $this->competence_andal,
                'competence_terpercaya' => $this->competence_terpercaya,
                'competence_memiliki_reputasi_yang_baik' => $this->competence_memiliki_reputasi_yang_baik,
                'competence_berkinerja_baik' => $this->competence_berkinerja_baik,
                'competence_memberikan_nilai' => $this->competence_memberikan_nilai,
                'excitement_inovatif' => $this->excitement_inovatif,
                'excitement_menarik' => $this->excitement_menarik,
                'excitement_penuh_semangat' => $this->excitement_penuh_semangat,
                'excitement_menyenangkan' => $this->excitement_menyenangkan,
                'excitement_selalu_ada_yang_baru' => $this->excitement_selalu_ada_yang_baru,
                'sophistication_elegan' => $this->sophistication_elegan,
                'sophistication_berkelas' => $this->sophistication_berkelas,
                'sophistication_bergaya' => $this->sophistication_bergaya,
                'sophistication_canggih' => $this->sophistication_canggih,
                'sophistication_mewah' => $this->sophistication_mewah,
                'ruggedness_tangguh' => $this->ruggedness_tangguh,
                'ruggedness_berkelas' => $this->ruggedness_berkelas,
                'ruggedness_mandiri' => $this->ruggedness_mandiri,
                'ruggedness_berani' => $this->ruggedness_berani,
                'ruggedness_tidak_takut_mengambil_risiko' => $this->ruggedness_tidak_takut_mengambil_risiko,
                'average_sincerity' => $average_sincerity,
                'average_competence' => $average_competence,
                'average_excitement' => $average_excitement,
                'average_sophistication' => $average_sophistication,
                'average_ruggedness' => $average_ruggedness,
            ]);
    
            $results = [
                'average_sincerity' => $average_sincerity,
                'average_competence' => $average_competence,
                'average_excitement' => $average_excitement,
                'average_sophistication' => $average_sophistication,
                'average_ruggedness' => $average_ruggedness,
            ];

            foreach($results as $columnName => $columnValue){
                BrandPersonalityAakerResult::create([
                    'bpa_id' => $brand_personality_aaker->id,
                    'brand_personality_aaker' => $columnName,
                    'result' => $columnValue,
                ]);
            }

            $brand_personality_aaker_results = BrandPersonalityAakerResult::where('bpa_id', $brand_personality_aaker->id)->orderBy('result', 'DESC')->get();

            foreach($brand_personality_aaker_results as $result){
                $string = $result->brand_personality_aaker;
                $pieces = explode('_', $string);
                $resultString = implode('_', array_slice($pieces, 1));
                $resultString = ucfirst($resultString);

                $brand_personality_aaker_result[] = [
                    'brand_personality_aaker' => $resultString,
                    'result' => $result->result,
                ];
            }

    
            Session::put('brand_personality_aaker_result', $brand_personality_aaker_result);
            $this->resetInput();
        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }

    public function resetInput(){
        $this->sincerity_hangat_dan_ramah = '';
        $this->sincerity_penuh_kasih_sayang = '';
        $this->sincerity_tulus = '';
        $this->sincerity_jujur = '';
        $this->sincerity_dapat_dipercaya = '';
        $this->competence_andal = '';
        $this->competence_terpercaya = '';
        $this->competence_memiliki_reputasi_yang_baik = '';
        $this->competence_berkinerja_baik = '';
        $this->competence_memberikan_nilai = '';
        $this->excitement_inovatif = '';
        $this->excitement_menarik = '';
        $this->excitement_penuh_semangat = '';
        $this->excitement_menyenangkan = '';
        $this->excitement_selalu_ada_yang_baru = '';
        $this->sophistication_elegan = '';
        $this->sophistication_berkelas = '';
        $this->sophistication_bergaya = '';
        $this->sophistication_canggih = '';
        $this->sophistication_mewah = '';
        $this->ruggedness_tangguh = '';
        $this->ruggedness_berkelas = '';
        $this->ruggedness_mandiri = '';
        $this->ruggedness_berani = '';
        $this->ruggedness_tidak_takut_mengambil_risiko = '';
    }

    public function clearSessionVariable(){
        Session::forget('brand_personality_aaker_result');
        $this->emit('sessionVariableCleared');
    }
    
    public function render()
    {
        return view('livewire.brand-personality-aakers.brand-personality-aaker');
    }
}
