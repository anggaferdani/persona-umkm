<?php

namespace App\Http\Livewire\Kuesioners;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Imports\KuesionerImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Kuesioner as KuesionerModel;

class Kuesioner extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public $kuesionerId;

    public $penggunaan_digital_marketing_oleh_ukm;
    
    public $domisili_ukm;
    public $jenis_kelamin;
    public $jabatan;
    public $usia;
    public $penghasilan;
    public $pendidikan;
    public $produk_ukm;
    public $nomor_ponsel;
    public $sudah_menggunakan_e_commerce;
    public $lama_usaha;
    public $jumlah_karyawan;
    public $penjualan_rata_rata_dalam_1_tahun_terakhir;
    public $menggunakan_digital_marketing_dalam_kegiatan_usaha;
    public $e_commerce_yang_digunakan;
    public $telah_menggunakan_e_commerce_selama;
    public $peningkatan_pendapatan_setelah_menggunakan_ecommerce;
    public $memiliki_website;
    public $memiliki_sarana_produksi_sendiri;
    public $memiliki_outlet;
    public $menggunakan_email_pribadi;
    public $meningkatkan_jumlah_transaksi;
    public $membantu_produk_menjadi_lebih_mudah_dicari;
    public $membantu_konsumen_yang_jauh_dari_lokasi;
    public $menambah_jaringan_mitra_usaha;
    public $mengurangi_biaya_iklan;
    public $memperpanjang_waktu_layanan;
    public $tidak_sulit_untuk_mempelajari_penggunaan_aplikasi;
    public $tidak_kesulitan_dalam_registrasi;
    public $mengunduh_aplikasi_cepat_dan_mudah_dilakukan;
    public $menggunakan_aplikasi_e_commerce_tidaklah_sulit;
    public $menggunakan_e_commerce_sesuai_dengan_kebutuhan;
    public $memiliki_pengetahuan_untuk_menggunakan_e_commerce;
    public $memiliki_perangkat_untuk_mengelola_e_commerce;
    public $manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan;
    public $adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya;
    public $adopsi_e_commerce_merupakan_inovasi_penting;
    public $memiliki_modal_cukup_untuk_adopsi_e_commerce;
    public $siap_menerima_resiko_dari_pemanfaatan_e_commerce;
    public $pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce;
    public $menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce;
    public $memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce;
    public $ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce;
    public $adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce;
    public $adanya_dorongan_dari_perkembangan_dunia_bisnis;
    public $adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital;
    public $adanya_persaingan_usaha;
    public $menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm;
    public $menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm;
    public $e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm;
    public $menggunakan_e_commerce_akan_merugikan_usaha;
    public $tertarik_untuk_menggunakan_e_commerce_dalam_usaha;
    public $berniat_menggunakan_e_commerce_dalam_usaha;
    public $akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce;
    public $melihat_keuntungan_ketika_menggunakan_e_commerce;
    
    public $status;

    public $selectedKuesioners = [];
    public $selectedKuesioners2 = [];
    
    public $pageLength = 10;
    public $sortBy = 'DESC';
    public $displayByStatus = 1;

    public $selectAll = false;
    public $selectAll2 = false;
    public $bulkDisabled = true;
    public $bulkDisabled2 = true;

    public function rules(){
        return [
            'domisili_ukm' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'jabatan' => 'required|string',
            'usia' => 'required|string',
            'penghasilan' => 'required|string',
            'pendidikan' => 'required|string',
            'produk_ukm' => 'required|string',
            'nomor_ponsel' => 'required|string',
            'sudah_menggunakan_e_commerce' => 'required|string',
            'lama_usaha' => 'required|string',
            'jumlah_karyawan' => 'required|string',
            'penjualan_rata_rata_dalam_1_tahun_terakhir' => 'required|string',
            'menggunakan_digital_marketing_dalam_kegiatan_usaha' => 'required|string',
            'e_commerce_yang_digunakan' => 'required|string',
            'telah_menggunakan_e_commerce_selama' => 'required|string',
            'peningkatan_pendapatan_setelah_menggunakan_ecommerce' => 'required|string',
            'memiliki_website' => 'required|string',
            'memiliki_sarana_produksi_sendiri' => 'required|string',
            'memiliki_outlet' => 'required|string',
            'menggunakan_email_pribadi' => 'required|string',
            'meningkatkan_jumlah_transaksi' => 'required|string',
            'membantu_produk_menjadi_lebih_mudah_dicari' => 'required|string',
            'membantu_konsumen_yang_jauh_dari_lokasi' => 'required|string',
            'menambah_jaringan_mitra_usaha' => 'required|string',
            'mengurangi_biaya_iklan' => 'required|string',
            'memperpanjang_waktu_layanan' => 'required|string',
            'tidak_sulit_untuk_mempelajari_penggunaan_aplikasi' => 'required|string',
            'tidak_kesulitan_dalam_registrasi' => 'required|string',
            'mengunduh_aplikasi_cepat_dan_mudah_dilakukan' => 'required|string',
            'menggunakan_aplikasi_e_commerce_tidaklah_sulit' => 'required|string',
            'menggunakan_e_commerce_sesuai_dengan_kebutuhan' => 'required|string',
            'memiliki_pengetahuan_untuk_menggunakan_e_commerce' => 'required|string',
            'memiliki_perangkat_untuk_mengelola_e_commerce' => 'required|string',
            'manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan' => 'required|string',
            'adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya' => 'required|string',
            'adopsi_e_commerce_merupakan_inovasi_penting' => 'required|string',
            'memiliki_modal_cukup_untuk_adopsi_e_commerce' => 'required|string',
            'siap_menerima_resiko_dari_pemanfaatan_e_commerce' => 'required|string',
            'pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce' => 'required|string',
            'menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce' => 'required|string',
            'memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce' => 'required|string',
            'ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce' => 'required|string',
            'adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce' => 'required|string',
            'adanya_dorongan_dari_perkembangan_dunia_bisnis' => 'required|string',
            'adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital' => 'required|string',
            'adanya_persaingan_usaha' => 'required|string',
            'menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm' => 'required|string',
            'menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm' => 'required|string',
            'e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm' => 'required|string',
            'menggunakan_e_commerce_akan_merugikan_usaha' => 'required|string',
            'tertarik_untuk_menggunakan_e_commerce_dalam_usaha' => 'required|string',
            'berniat_menggunakan_e_commerce_dalam_usaha' => 'required|string',
            'akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce' => 'required|string',
            'melihat_keuntungan_ketika_menggunakan_e_commerce' => 'required|string',
        ];
    }

    public function updated($fields){
        $this->validateOnly($fields);
    }

    public function importKuesioner(){
        $this->validate([
            'penggunaan_digital_marketing_oleh_ukm' => 'required|mimes:xlsx, xls',
        ]);

        Excel::import(new KuesionerImport, $this->penggunaan_digital_marketing_oleh_ukm);

        $this->resetInput();
        $this->emit('success');
    }

    public function selectKuesionerId($kuesionerId){
        $kuesioner = KuesionerModel::find($kuesionerId);

        if($kuesioner){
            $this->kuesionerId = $kuesioner->id;
            $this->domisili_ukm = $kuesioner->domisili_ukm;
            $this->jenis_kelamin = $kuesioner->jenis_kelamin;
            $this->jabatan = $kuesioner->jabatan;
            $this->usia = $kuesioner->usia;
            $this->penghasilan = $kuesioner->penghasilan;
            $this->pendidikan = $kuesioner->pendidikan;
            $this->produk_ukm = $kuesioner->produk_ukm;
            $this->nomor_ponsel = $kuesioner->nomor_ponsel;
            $this->sudah_menggunakan_e_commerce = $kuesioner->sudah_menggunakan_e_commerce;
            $this->lama_usaha = $kuesioner->lama_usaha;
            $this->jumlah_karyawan = $kuesioner->jumlah_karyawan;
            $this->penjualan_rata_rata_dalam_1_tahun_terakhir = $kuesioner->penjualan_rata_rata_dalam_1_tahun_terakhir;
            $this->menggunakan_digital_marketing_dalam_kegiatan_usaha = $kuesioner->menggunakan_digital_marketing_dalam_kegiatan_usaha;
            $this->e_commerce_yang_digunakan = $kuesioner->e_commerce_yang_digunakan;
            $this->telah_menggunakan_e_commerce_selama = $kuesioner->telah_menggunakan_e_commerce_selama;
            $this->peningkatan_pendapatan_setelah_menggunakan_ecommerce = $kuesioner->peningkatan_pendapatan_setelah_menggunakan_ecommerce;
            $this->memiliki_website = $kuesioner->memiliki_website;
            $this->memiliki_sarana_produksi_sendiri = $kuesioner->memiliki_sarana_produksi_sendiri;
            $this->memiliki_outlet = $kuesioner->memiliki_outlet;
            $this->menggunakan_email_pribadi = $kuesioner->menggunakan_email_pribadi;
            $this->meningkatkan_jumlah_transaksi = $kuesioner->meningkatkan_jumlah_transaksi;
            $this->membantu_produk_menjadi_lebih_mudah_dicari = $kuesioner->membantu_produk_menjadi_lebih_mudah_dicari;
            $this->membantu_konsumen_yang_jauh_dari_lokasi = $kuesioner->membantu_konsumen_yang_jauh_dari_lokasi;
            $this->menambah_jaringan_mitra_usaha = $kuesioner->menambah_jaringan_mitra_usaha;
            $this->mengurangi_biaya_iklan = $kuesioner->mengurangi_biaya_iklan;
            $this->memperpanjang_waktu_layanan = $kuesioner->memperpanjang_waktu_layanan;
            $this->tidak_sulit_untuk_mempelajari_penggunaan_aplikasi = $kuesioner->tidak_sulit_untuk_mempelajari_penggunaan_aplikasi;
            $this->tidak_kesulitan_dalam_registrasi = $kuesioner->tidak_kesulitan_dalam_registrasi;
            $this->mengunduh_aplikasi_cepat_dan_mudah_dilakukan = $kuesioner->mengunduh_aplikasi_cepat_dan_mudah_dilakukan;
            $this->menggunakan_aplikasi_e_commerce_tidaklah_sulit = $kuesioner->menggunakan_aplikasi_e_commerce_tidaklah_sulit;
            $this->menggunakan_e_commerce_sesuai_dengan_kebutuhan = $kuesioner->menggunakan_e_commerce_sesuai_dengan_kebutuhan;
            $this->memiliki_pengetahuan_untuk_menggunakan_e_commerce = $kuesioner->memiliki_pengetahuan_untuk_menggunakan_e_commerce;
            $this->memiliki_perangkat_untuk_mengelola_e_commerce = $kuesioner->memiliki_perangkat_untuk_mengelola_e_commerce;
            $this->manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan = $kuesioner->manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan;
            $this->adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya = $kuesioner->adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya;
            $this->adopsi_e_commerce_merupakan_inovasi_penting = $kuesioner->adopsi_e_commerce_merupakan_inovasi_penting;
            $this->memiliki_modal_cukup_untuk_adopsi_e_commerce = $kuesioner->memiliki_modal_cukup_untuk_adopsi_e_commerce;
            $this->siap_menerima_resiko_dari_pemanfaatan_e_commerce = $kuesioner->siap_menerima_resiko_dari_pemanfaatan_e_commerce;
            $this->pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce = $kuesioner->pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce;
            $this->menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce = $kuesioner->menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce;
            $this->memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce = $kuesioner->memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce;
            $this->ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce = $kuesioner->ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce;
            $this->adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce = $kuesioner->adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce;
            $this->adanya_dorongan_dari_perkembangan_dunia_bisnis = $kuesioner->adanya_dorongan_dari_perkembangan_dunia_bisnis;
            $this->adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital = $kuesioner->adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital;
            $this->adanya_persaingan_usaha = $kuesioner->adanya_persaingan_usaha;
            $this->menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm = $kuesioner->menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm;
            $this->menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm = $kuesioner->menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm;
            $this->e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm = $kuesioner->e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm;
            $this->menggunakan_e_commerce_akan_merugikan_usaha = $kuesioner->menggunakan_e_commerce_akan_merugikan_usaha;
            $this->tertarik_untuk_menggunakan_e_commerce_dalam_usaha = $kuesioner->tertarik_untuk_menggunakan_e_commerce_dalam_usaha;
            $this->berniat_menggunakan_e_commerce_dalam_usaha = $kuesioner->berniat_menggunakan_e_commerce_dalam_usaha;
            $this->akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce = $kuesioner->akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce;
            $this->melihat_keuntungan_ketika_menggunakan_e_commerce = $kuesioner->melihat_keuntungan_ketika_menggunakan_e_commerce;
        }else{
            return redirect()->route('superadmin.kueasioner');
        }
    }

    public function updateKuesioner(){
        $request = $this->validate();

        KuesionerModel::where('id', $this->kuesionerId)->update([
            'domisili_ukm' => $request['domisili_ukm'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'jabatan' => $request['jabatan'],
            'usia' => $request['usia'],
            'penghasilan' => $request['penghasilan'],
            'pendidikan' => $request['pendidikan'],
            'produk_ukm' => $request['produk_ukm'],
            'nomor_ponsel' => $request['nomor_ponsel'],
            'sudah_menggunakan_e_commerce' => $request['sudah_menggunakan_e_commerce'],
            'lama_usaha' => $request['lama_usaha'],
            'jumlah_karyawan' => $request['jumlah_karyawan'],
            'penjualan_rata_rata_dalam_1_tahun_terakhir' => $request['penjualan_rata_rata_dalam_1_tahun_terakhir'],
            'menggunakan_digital_marketing_dalam_kegiatan_usaha' => $request['menggunakan_digital_marketing_dalam_kegiatan_usaha'],
            'e_commerce_yang_digunakan' => $request['e_commerce_yang_digunakan'],
            'telah_menggunakan_e_commerce_selama' => $request['telah_menggunakan_e_commerce_selama'],
            'peningkatan_pendapatan_setelah_menggunakan_ecommerce' => $request['peningkatan_pendapatan_setelah_menggunakan_ecommerce'],
            'memiliki_website' => $request['memiliki_website'],
            'memiliki_sarana_produksi_sendiri' => $request['memiliki_sarana_produksi_sendiri'],
            'memiliki_outlet' => $request['memiliki_outlet'],
            'menggunakan_email_pribadi' => $request['menggunakan_email_pribadi'],
            'meningkatkan_jumlah_transaksi' => $request['meningkatkan_jumlah_transaksi'],
            'membantu_produk_menjadi_lebih_mudah_dicari' => $request['membantu_produk_menjadi_lebih_mudah_dicari'],
            'membantu_konsumen_yang_jauh_dari_lokasi' => $request['membantu_konsumen_yang_jauh_dari_lokasi'],
            'menambah_jaringan_mitra_usaha' => $request['menambah_jaringan_mitra_usaha'],
            'mengurangi_biaya_iklan' => $request['mengurangi_biaya_iklan'],
            'memperpanjang_waktu_layanan' => $request['memperpanjang_waktu_layanan'],
            'tidak_sulit_untuk_mempelajari_penggunaan_aplikasi' => $request['tidak_sulit_untuk_mempelajari_penggunaan_aplikasi'],
            'tidak_kesulitan_dalam_registrasi' => $request['tidak_kesulitan_dalam_registrasi'],
            'mengunduh_aplikasi_cepat_dan_mudah_dilakukan' => $request['mengunduh_aplikasi_cepat_dan_mudah_dilakukan'],
            'menggunakan_aplikasi_e_commerce_tidaklah_sulit' => $request['menggunakan_aplikasi_e_commerce_tidaklah_sulit'],
            'menggunakan_e_commerce_sesuai_dengan_kebutuhan' => $request['menggunakan_e_commerce_sesuai_dengan_kebutuhan'],
            'memiliki_pengetahuan_untuk_menggunakan_e_commerce' => $request['memiliki_pengetahuan_untuk_menggunakan_e_commerce'],
            'memiliki_perangkat_untuk_mengelola_e_commerce' => $request['memiliki_perangkat_untuk_mengelola_e_commerce'],
            'manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan' => $request['manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan'],
            'adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya' => $request['adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya'],
            'adopsi_e_commerce_merupakan_inovasi_penting' => $request['adopsi_e_commerce_merupakan_inovasi_penting'],
            'memiliki_modal_cukup_untuk_adopsi_e_commerce' => $request['memiliki_modal_cukup_untuk_adopsi_e_commerce'],
            'siap_menerima_resiko_dari_pemanfaatan_e_commerce' => $request['siap_menerima_resiko_dari_pemanfaatan_e_commerce'],
            'pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce' => $request['pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce'],
            'menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce' => $request['menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce'],
            'memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce' => $request['memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce'],
            'ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce' => $request['ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce'],
            'adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce' => $request['adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce'],
            'adanya_dorongan_dari_perkembangan_dunia_bisnis' => $request['adanya_dorongan_dari_perkembangan_dunia_bisnis'],
            'adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital' => $request['adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital'],
            'adanya_persaingan_usaha' => $request['adanya_persaingan_usaha'],
            'menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm' => $request['menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm'],
            'menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm' => $request['menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm'],
            'e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm' => $request['e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm'],
            'menggunakan_e_commerce_akan_merugikan_usaha' => $request['menggunakan_e_commerce_akan_merugikan_usaha'],
            'tertarik_untuk_menggunakan_e_commerce_dalam_usaha' => $request['tertarik_untuk_menggunakan_e_commerce_dalam_usaha'],
            'berniat_menggunakan_e_commerce_dalam_usaha' => $request['berniat_menggunakan_e_commerce_dalam_usaha'],
            'akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce' => $request['akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce'],
            'melihat_keuntungan_ketika_menggunakan_e_commerce' => $request['melihat_keuntungan_ketika_menggunakan_e_commerce'],
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('success');
    }

    public function deleteKuesioner(){
        KuesionerModel::where('id', $this->kuesionerId)->update([
            'status' => 2,
        ]);

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('error');
    }

    public function deleteSelectedKuesioner(){
        KuesionerModel::whereIn('id', $this->selectedKuesioners)->update([
            'status' => 2,
        ]);

        $this->selectedKuesioners = [];
        $this->selectAll = false;
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('error');
    }

    public function updatedSelectAll($value){
        if($value){
            $this->selectedKuesioners = KuesionerModel::where('status', 1)->pluck('id');
        }else{
            $this->selectedKuesioners = [];
        }
    }

    public function restoreKuesioner(){
        KuesionerModel::where('id', $this->kuesionerId)->update([
            'status' => 1,
        ]);

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('success');
    }

    public function deletePermanently(){
        KuesionerModel::where('id', $this->kuesionerId)->delete();

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('error');
    }

    public function restoreSelectedKuesioner(){
        KuesionerModel::whereIn('id', $this->selectedKuesioners2)->update([
            'status' => 1,
        ]);

        $this->selectedKuesioners2 = [];
        $this->selectAll2 = false;
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('success');
    }

    public function deleteSelectedKuesionerPermanently(){
        KuesionerModel::whereIn('id', $this->selectedKuesioners2)->delete();

        $this->selectedKuesioners2 = [];
        $this->selectAll2 = false;
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updatedSelectAll2($value){
        if($value){
            $this->selectedKuesioners2 = KuesionerModel::where('status', 2)->pluck('id');
        }else{
            $this->selectedKuesioners2 = [];
        }
    }

    public function closeModal(){
        $this->resetInput();
    }

    public function resetInput(){
        $this->penggunaan_digital_marketing_oleh_ukm = '';
        $this->domisili_ukm = '';
        $this->jenis_kelamin = '';
        $this->jabatan = '';
        $this->usia = '';
        $this->penghasilan = '';
        $this->pendidikan = '';
        $this->produk_ukm = '';
        $this->nomor_ponsel = '';
        $this->sudah_menggunakan_e_commerce = '';
        $this->lama_usaha = '';
        $this->jumlah_karyawan = '';
        $this->penjualan_rata_rata_dalam_1_tahun_terakhir = '';
        $this->menggunakan_digital_marketing_dalam_kegiatan_usaha = '';
        $this->e_commerce_yang_digunakan = '';
        $this->telah_menggunakan_e_commerce_selama = '';
        $this->peningkatan_pendapatan_setelah_menggunakan_ecommerce = '';
        $this->memiliki_website = '';
        $this->memiliki_sarana_produksi_sendiri = '';
        $this->memiliki_outlet = '';
        $this->menggunakan_email_pribadi = '';
        $this->meningkatkan_jumlah_transaksi = '';
        $this->membantu_produk_menjadi_lebih_mudah_dicari = '';
        $this->membantu_konsumen_yang_jauh_dari_lokasi = '';
        $this->menambah_jaringan_mitra_usaha = '';
        $this->mengurangi_biaya_iklan = '';
        $this->memperpanjang_waktu_layanan = '';
        $this->tidak_sulit_untuk_mempelajari_penggunaan_aplikasi = '';
        $this->tidak_kesulitan_dalam_registrasi = '';
        $this->mengunduh_aplikasi_cepat_dan_mudah_dilakukan = '';
        $this->menggunakan_aplikasi_e_commerce_tidaklah_sulit = '';
        $this->menggunakan_e_commerce_sesuai_dengan_kebutuhan = '';
        $this->memiliki_pengetahuan_untuk_menggunakan_e_commerce = '';
        $this->memiliki_perangkat_untuk_mengelola_e_commerce = '';
        $this->manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan = '';
        $this->adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya = '';
        $this->adopsi_e_commerce_merupakan_inovasi_penting = '';
        $this->memiliki_modal_cukup_untuk_adopsi_e_commerce = '';
        $this->siap_menerima_resiko_dari_pemanfaatan_e_commerce = '';
        $this->pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce = '';
        $this->menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce = '';
        $this->memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce = '';
        $this->ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce = '';
        $this->adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce = '';
        $this->adanya_dorongan_dari_perkembangan_dunia_bisnis = '';
        $this->adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital = '';
        $this->adanya_persaingan_usaha = '';
        $this->menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm = '';
        $this->menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm = '';
        $this->e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm = '';
        $this->menggunakan_e_commerce_akan_merugikan_usaha = '';
        $this->tertarik_untuk_menggunakan_e_commerce_dalam_usaha = '';
        $this->berniat_menggunakan_e_commerce_dalam_usaha = '';
        $this->akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce = '';
        $this->melihat_keuntungan_ketika_menggunakan_e_commerce = '';
    }

    public function render()
    {
        $query = KuesionerModel::query();
        $query->where(function ($query){
            $query->where('produk_ukm', 'like', '%'.$this->search.'%')
            ->orWhere('domisili_ukm', 'like', '%' . $this->search . '%')
            ->orWhere('nomor_ponsel', 'like', '%' . $this->search . '%');
        })->where('status', $this->displayByStatus)->orderBy('id', $this->sortBy);
        $kuesioners = $query->paginate($this->pageLength);

        $this->bulkDisabled = count($this->selectedKuesioners) < 1;
        $this->bulkDisabled2 = count($this->selectedKuesioners2) < 1;

        return view('livewire.kuesioners.kuesioner', [
            'kuesioners' => $kuesioners,
        ]);
    }
}
