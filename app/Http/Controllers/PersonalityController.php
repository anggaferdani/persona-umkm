<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\LevelUmkm;
use Illuminate\Http\Request;
use App\Models\StrategiDigital;
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
        if(Auth::user()->role == 3){
            return redirect('/umkm/hasil/'.Auth::user()->id);
        }elseif(Auth::user()->role == 4){
            return redirect('/marketer/hasil/'.Auth::user()->id);
        }
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

        $level = LevelUmkm::where('user_id', $user)->first();

        $basic = LevelUmkm::where('user_id', $user)->where('team', 'tidak')->where('ecommerce', 'tidak')->where('landing_page', 'tidak')->first();

        $intermediate = LevelUmkm::where('user_id', $user)->where('team', 'tidak')->where('ecommerce', 'tidak')->where('landing_page', 'iya')->first();

        $advance1 = LevelUmkm::where('user_id', $user)->where('team', 'iya')->where('ecommerce', 'iya')->where('landing_page', 'iya')->first();

        $advance2 = LevelUmkm::where('user_id', $user)->where('team', 'iya')->where('ecommerce', 'tidak')->where('landing_page', 'iya')->first();

        $advance3 = LevelUmkm::where('user_id', $user)->where('team', 'iya')->where('ecommerce', 'tidak')->where('landing_page', 'tidak')->first();

        $strategi = StrategiDIgital::where('user_id', $user)->first();

        $shope95 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'iya')->where('promo', 'iya')->first();
        $shope901 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'iya')->where('promo', 'tidak')->first();
        $shope902 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'tidak')->where('promo', 'iya')->first();
        $shope85 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'tidak')->where('promo', 'tidak')->first();

        $tokped95 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'iya')->where('promo', 'iya')->first();
        $tokped901 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'iya')->where('promo', 'tidak')->first();
        $tokped902 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'tidak')->where('promo', 'iya')->first();
        $tokped85 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'tidak')->where('promo', 'tidak')->first();

        $tiktok95 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'iya')->where('promo', 'iya')->first();
        $tiktok901 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'iya')->where('promo', 'tidak')->first();
        $tiktok902 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'tidak')->where('promo', 'iya')->first();
        $tiktok85 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'iya')->where('cod', 'tidak')->where('promo', 'tidak')->first();

        $instagram95 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'iya')->where('promo', 'iya')->first();
        $instagram901 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'iya')->where('promo', 'tidak')->first();
        $instagram902 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'tidak')->where('promo', 'iya')->first();
        $instagram85 = StrategiDIgital::where('user_id', $user)->where('live_stream', 'tidak')->where('cod', 'tidak')->where('promo', 'tidak')->first();
        // dd($level->team);

        return view('NewPages.Beranda', compact('bparesult', 'bpamax', 'bpasincepercent', 'bpacompepercent', 'bpaexcipercent', 'bpasophispercent', 'bparugpercent', 'level', 'basic', 'intermediate', 'advance1', 'advance2', 'advance3', 'strategi', 'shope95', 'shope901', 'shope902', 'shope85', 'tokped95', 'tokped901', 'tokped902', 'tokped85', 'tiktok95', 'tiktok901','tiktok902', 'tiktok85', 'instagram95', 'instagram901', 'instagram902', 'instagram85'));
    }

    public function levelumkm(Request $request){
        $this->validate($request,[
            'merk' => 'required',
            'whatsapp_bisnis' => 'required',
            'gbusiness' => 'required',
            'landing_page' => 'required',
            'sosmed' => 'required',
            'ecommerce' => 'required',
            'team' => 'required',
        ],[
            'merk' => 'Insert Merk Name',
            'whatsapp_bisnis' => 'Select One',
            'gbusiness' => 'Select One',
            'landing_page' => 'Select One',
            'sosmed' => 'Select One',
            'ecommerce' => 'Select One',
            'team' => 'Select One',
        ]);
        $user = Auth::user()->id;
        $level = LevelUmkm::where('user_id', $user)->first();

        if($level){
            $level->merk = $request->merk;
            $level->whatsapp_bisnis = $request->whatsapp_bisnis;
            $level->gbusiness = $request->gbusiness;
            $level->landing_page = $request->landing_page;
            $level->sosmed = $request->sosmed;
            $level->ecommerce = $request->ecommerce;
            $level->team = $request->team;
            $level->user_id = Auth::user()->id;

            $level->save();
        }else{
            $levelnew = new LevelUmkm();
            $levelnew->merk = $request->merk;
            $levelnew->whatsapp_bisnis = $request->whatsapp_bisnis;
            $levelnew->gbusiness = $request->gbusiness;
            $levelnew->landing_page = $request->landing_page;
            $levelnew->sosmed = $request->sosmed;
            $levelnew->ecommerce = $request->ecommerce;
            $levelnew->team = $request->team;
            $levelnew->user_id = Auth::user()->id;

            $levelnew->save();
        }

        
        Alert::success('Success', 'Level Digitalisasi Anda Sudah Ditentukan');
        return redirect()->back();

    }

    public function marketerberanda(){
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

        return view('Marketer.Hasil', compact('bparesult', 'bpamax', 'bpasincepercent', 'bpacompepercent', 'bpaexcipercent', 'bpasophispercent', 'bparugpercent'));
    }

    public function marketer(){
        $marketer = User::where('role', 4)->get();
        return view('NewPages.Marketer', compact('marketer'));
    }

    public function downloadcv($file){
        return response()->download(public_path('file/'.$file));
    }

    public function downloadporto($file){
        return response()->download(public_path('file/'.$file));
    }

    public function profil(){
        $profil = Profile::where('user_id', Auth::user()->id)->first();
        return view('NewPages.Profile', compact('profil'));
    }

    public function profilsubmit(Request $request){
        $this->validate($request,[
            'foto' => 'required|file|mimes:png,jpg,jpeg',
            'alamat' => 'required',
            'no_telepon' => 'required',
        ],[
            'foto' => 'Insert Profile Photo',
            'foto.mimes' => 'Image Must Be .png, .jpeg, .jpg',
            'alamat' => 'Insert Your Address',
            'no_telepon' => 'Insert Your Phone Number',
        ]);

        $newProfile = new Profile();
        $newProfile->user_id = Auth::user()->id;
        $newProfile->alamat = $request->alamat;
        $newProfile->no_telepon = $request->no_telepon;

        if($request->hasFile('foto'))
        {
            $fotoprofile = 'Profile'.Auth::user()->name.'.'.$request->foto->getClientOriginalExtension();
            $request->file('foto')->move(public_path().'/img/', $fotoprofile);
            $newProfile->foto = $fotoprofile;
            $newProfile->save();
        }

        if($request->deskripsi){
            $newProfile->deskripsi = $request->deskripsi;
            $newProfile->save();
        }
        $newProfile->save();
        Alert::success('Success', 'Profile Anda Telah Diupdate');
        return redirect()->back();

    }

    public function marketerdetail($id){
        $userid = User::find($id);
        $pp = Profile::where('user_id', $id)->first();

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

        return view('NewPages.MarketerDetail', compact('userid', 'bparesult', 'bpamax', 'bpasincepercent', 'bpacompepercent', 'bpaexcipercent', 'bpasophispercent', 'bparugpercent', 'pp'));
    }

    public function strategi(Request $request){
        $this->validate($request,[
            'live_stream' => 'required',
            'cod' => 'required',
            'promo' => 'required',
            'ekspor' => 'required',
            'iklan' => 'required',
            'jenis_product' => 'required',
        ],[
            'live_stream' => 'Insert Merk Name',
            'cod' => 'Select One',
            'promo' => 'Select One',
            'ekspor' => 'Select One',
            'iklan' => 'Select One',
            'jenis_product' => 'Select One',
        ]);


        $user = Auth::user()->id;
        $strategi = StrategiDigital::where('user_id',$user)->first();

        if($strategi){
            $strategi->user_id = Auth::user()->id;
            $strategi->live_stream = $request->live_stream;
            $strategi->cod = $request->cod;
            $strategi->promo = $request->promo;
            $strategi->ekspor = $request->ekspor;
            $strategi->iklan = $request->iklan;
            $strategi->jenis_product = $request->jenis_product;
            $strategi->save();
        }else{
            $newStrategi = new StrategiDigital();
            $newStrategi->user_id = $user;
            $newStrategi->live_stream = $request->live_stream;
            $newStrategi->cod = $request->cod;
            $newStrategi->promo = $request->promo;
            $newStrategi->ekspor = $request->ekspor;
            $newStrategi->iklan = $request->iklan;
            $newStrategi->jenis_product = $request->jenis_product;
            $newStrategi->save();
        }

        Alert::success('Success', 'Strategi Anda Telah Ditentukan');
        return back();
    }
}
