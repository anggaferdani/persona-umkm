<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\BrandPersonalityAakerResult;
use App\Models\BrandPersonalityAaker as BrandPersonalityAakerModel;

class PersonalityController extends Controller
{
    public function welcome(){
        return view('NewPages.SelamatDatang');
    }

    public function kuisioner(){
        return view('NewPages.IsiKuisioner');
    }

    public function postkuisioner(Request $request){
        $validator = Validator::make($request->all(), [
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
            'gender' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', $validator->messages());
        }
        
        $sincerity = [
            $request->sincerity_hangat_dan_ramah,
            $request->sincerity_penuh_kasih_sayang,
            $request->sincerity_tulus,
            $request->sincerity_jujur,
            $request->sincerity_dapat_dipercaya,
        ];

        $average_sincerity = array_sum($sincerity) / count($sincerity);

        $competence = [
            $request->competence_andal,
            $request->competence_terpercaya,
            $request->competence_memiliki_reputasi_yang_baik,
            $request->competence_berkinerja_baik,
            $request->competence_memberikan_nilai,
        ];

        $average_competence = array_sum($competence) / count($competence);

        $excitement = [
            $request->excitement_inovatif,
            $request->excitement_menarik,
            $request->excitement_penuh_semangat,
            $request->excitement_menyenangkan,
            $request->excitement_selalu_ada_yang_baru,
        ];

        $average_excitement = array_sum($excitement) / count($excitement);

        $sophistication = [
            $request->sophistication_elegan,
            $request->sophistication_berkelas,
            $request->sophistication_bergaya,
            $request->sophistication_canggih,
            $request->sophistication_mewah,
        ];

        $average_sophistication = array_sum($sophistication) / count($sophistication);

        $ruggedness = [
            $request->ruggedness_tangguh,
            $request->ruggedness_berkelas,
            $request->ruggedness_mandiri,
            $request->ruggedness_berani,
            $request->ruggedness_tidak_takut_mengambil_risiko,
        ];

        $average_ruggedness = array_sum($ruggedness) / count($ruggedness);
        $bpastore = new BrandPersonalityAakerModel();
        
        $bpastore->sincerity_hangat_dan_ramah = $request->sincerity_hangat_dan_ramah;
        $bpastore->sincerity_penuh_kasih_sayang = $request->sincerity_penuh_kasih_sayang;
        $bpastore->sincerity_tulus = $request->sincerity_tulus;
        $bpastore->sincerity_jujur = $request->sincerity_jujur;
        $bpastore->sincerity_dapat_dipercaya = $request->sincerity_dapat_dipercaya;
        $bpastore->competence_andal = $request->competence_andal;
        $bpastore->competence_terpercaya = $request->competence_terpercaya;
        $bpastore->competence_memiliki_reputasi_yang_baik = $request->competence_memiliki_reputasi_yang_baik;
        $bpastore->competence_berkinerja_baik = $request->competence_berkinerja_baik;
        $bpastore->competence_memberikan_nilai = $request->competence_memberikan_nilai;
        $bpastore->excitement_inovatif = $request->excitement_inovatif;
        $bpastore->excitement_menarik = $request->excitement_menarik;
        $bpastore->excitement_penuh_semangat = $request->excitement_penuh_semangat;
        $bpastore->excitement_menyenangkan = $request->excitement_menyenangkan;
        $bpastore->excitement_selalu_ada_yang_baru = $request->excitement_selalu_ada_yang_baru;
        $bpastore->sophistication_elegan = $request->sophistication_elegan;
        $bpastore->sophistication_berkelas = $request->sophistication_berkelas;
        $bpastore->sophistication_bergaya = $request->sophistication_bergaya;
        $bpastore->sophistication_canggih = $request->sophistication_canggih;
        $bpastore->sophistication_mewah = $request->sophistication_mewah;
        $bpastore->ruggedness_tangguh = $request->ruggedness_tangguh;
        $bpastore->ruggedness_berkelas = $request->ruggedness_berkelas;
        $bpastore->ruggedness_mandiri = $request->ruggedness_mandiri;
        $bpastore->ruggedness_berani = $request->ruggedness_berani;
        $bpastore->ruggedness_tidak_takut_mengambil_risiko = $request->ruggedness_tidak_takut_mengambil_risiko;
        $bpastore->average_sincerity = $average_sincerity;
        $bpastore->average_competence = $average_competence;
        $bpastore->average_excitement = $average_excitement;
        $bpastore->average_sophistication = $average_sophistication;
        $bpastore->average_ruggedness = $average_ruggedness;
        $bpastore->gender = $request->gender;
        $bpastore->created_by = Auth::user()->id;
        $bpastore->save();

        $results = [
            'average_sincerity' => $average_sincerity,
            'average_competence' => $average_competence,
            'average_excitement' => $average_excitement,
            'average_sophistication' => $average_sophistication,
            'average_ruggedness' => $average_ruggedness,
        ];

        foreach($results as $columnName => $columnValue){
            BrandPersonalityAakerResult::create([
                'bpa_id' => $bpastore->id,
                'brand_personality_aaker' => $columnName,
                'result' => $columnValue,
            ]);
        }
        Alert::success('Success', 'Lihat Hasil Anda');
        return redirect('/hasil/'.Auth::user()->id);
    }

    public function hasil($id){
        $bparesult = BrandPersonalityAakerResult::where('created_by', $id)->get();
        $bpamax = BrandPersonalityAakerResult::where('created_by', $id)->orderby('result', 'DESC')->first();

        $bpasince = BrandPersonalityAakerResult::where('created_by', $id)->where('brand_personality_aaker', 'average_sincerity')->first();
        $bpasincepercent = $bpasince->result * 20;

        $bpacompe = BrandPersonalityAakerResult::where('created_by', $id)->where('brand_personality_aaker', 'average_competence')->first();
        $bpacompepercent = $bpacompe->result * 20;

        $bpaexci = BrandPersonalityAakerResult::where('created_by', $id)->where('brand_personality_aaker', 'average_excitement')->first();
        $bpaexcipercent = $bpaexci->result * 20;

        $bpasophis = BrandPersonalityAakerResult::where('created_by', $id)->where('brand_personality_aaker', 'average_sophistication')->first();
        $bpasophispercent = $bpasophis->result * 20;

        $bparug = BrandPersonalityAakerResult::where('created_by', $id)->where('brand_personality_aaker', 'average_ruggedness')->first();
        $bparugpercent = $bparug->result * 20;
        return view('NewPages.Hasil', compact('bparesult', 'bpamax', 'bpasincepercent', 'bpacompepercent', 'bpaexcipercent', 'bpasophispercent', 'bparugpercent'));
    }

    public function beranda(){
        $user = Auth::user()->id;
        $bparesult = BrandPersonalityAakerResult::where('created_by', $user)->get();
        $bpamax = BrandPersonalityAakerResult::where('created_by', $user)->orderby('result', 'DESC')->first();

        $bpasince = BrandPersonalityAakerResult::where('created_by', $user)->where('brand_personality_aaker', 'average_sincerity')->first();
        $bpasincepercent = $bpasince->result * 20;

        $bpacompe = BrandPersonalityAakerResult::where('created_by', $user)->where('brand_personality_aaker', 'average_competence')->first();
        $bpacompepercent = $bpacompe->result * 20;

        $bpaexci = BrandPersonalityAakerResult::where('created_by', $user)->where('brand_personality_aaker', 'average_excitement')->first();
        $bpaexcipercent = $bpaexci->result * 20;

        $bpasophis = BrandPersonalityAakerResult::where('created_by', $user)->where('brand_personality_aaker', 'average_sophistication')->first();
        $bpasophispercent = $bpasophis->result * 20;

        $bparug = BrandPersonalityAakerResult::where('created_by', $user)->where('brand_personality_aaker', 'average_ruggedness')->first();
        $bparugpercent = $bparug->result * 20;

        return view('NewPages.Beranda', compact('bparesult', 'bpamax', 'bpasincepercent', 'bpacompepercent', 'bpaexcipercent', 'bpasophispercent', 'bparugpercent'));
    }
}
