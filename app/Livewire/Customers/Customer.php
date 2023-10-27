<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Imports\CustomerImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Customer as CustomerModel;

class Customer extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public $customerId;

    public $survei_pelanggan;
    
    public $usia;
    public $jenis_kelamin;
    public $pekerjaan;
    public $pendidikan;
    public $seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan;
    public $fitur_apa_yang_pertama_kali_anda_lihat;
    public $dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda;
    public $apa_yang_akan_sangat_penting_bagi_anda;
    public $secara_spontan_dan_paling_sesuai_dengan_hidup_anda;
    public $apakah_anda_biasanya_membuat_keputusan_penting_secara;
    public $anda_terdampar_dan_berakhir_di_pulau_terpencil;
    public $tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas;
    public $bagaimana_anda_menggambarkan_gaya_busana_favorit_anda;
    public $berbagai_kegiatan_rekreasi_ditawarkan_di_hotel;
    public $anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari;
    public $pernahkan_anda_melihat_iklan_produk_tersebut;
    public $apakah_informasi_yang_diberikan_cukup_jelas;
    public $membantu_memahami_produk_tersebut;
    public $tertarik_untuk_mengetahui_produk_tersebut;
    public $materi_konten_berhasil_menarik_perhatian_anda;
    public $bermanfaat_untuk_memahami_kebutuhan_masalah_anda;
    public $membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk;
    public $produk_tersebut_lebih_baik_dari_pesaing;
    public $produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda;
    public $produk_layanan_tersebut_mudah_digunakan;
    public $memberikan_nilai_yang_baik_untuk_uang_anda;
    public $memenuhi_standar_kualitas_yang_diharapkan;
    public $tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian;
    public $proses_pembelian_mudah_dipahami_dan_dilakukan;
    public $tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan;
    public $merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya;
    public $produk_tersebut_memenuhi_ekspektasi_anda;
    public $produk_layanan_tersebut_memenuhi_standar_keamanan;
    public $produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian;
    public $apakah_anda_akan_anda_akan_merekomendasikan_produk_kami;
    public $apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi;
    public $apakah_anda_akan_anda_loyal_terhadap_merk_tersebut;
    public $mengetahui_produk_brand_dari_marketplace;
    public $mengetahui_produk_brand_dari_iklan;
    public $mengetahui_produk_brand_dari_rekan_teman_word_of_mouth;
    public $fitur_kedua_apa_yang_selanjutnya_anda_lihat;
    public $mengetahui_produk_brand_dari_e_mail;
    public $apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm;
    public $tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer;
    
    public $status;

    public $selectedCustomers = [];
    public $selectedCustomers2 = [];
    
    public $pageLength = 10;
    public $sortBy = 'DESC';
    public $displayByStatus = 1;

    public $selectAll = false;
    public $selectAll2 = false;
    public $bulkDisabled = true;
    public $bulkDisabled2 = true;

    public function rules(){
        return [
            'usia' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'pekerjaan' => 'required|string',
            'pendidikan' => 'required|string',
            'seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan' => 'required|string',
            'fitur_apa_yang_pertama_kali_anda_lihat' => 'required|string',
            'dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda' => 'required|string',
            'apa_yang_akan_sangat_penting_bagi_anda' => 'required|string',
            'secara_spontan_dan_paling_sesuai_dengan_hidup_anda' => 'required|string',
            'apakah_anda_biasanya_membuat_keputusan_penting_secara' => 'required|string',
            'anda_terdampar_dan_berakhir_di_pulau_terpencil' => 'required|string',
            'tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas' => 'required|string',
            'bagaimana_anda_menggambarkan_gaya_busana_favorit_anda' => 'required|string',
            'berbagai_kegiatan_rekreasi_ditawarkan_di_hotel' => 'required|string',
            'anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari' => 'required|string',
            'pernahkan_anda_melihat_iklan_produk_tersebut' => 'required|string',
            'apakah_informasi_yang_diberikan_cukup_jelas' => 'required|string',
            'membantu_memahami_produk_tersebut' => 'required|string',
            'tertarik_untuk_mengetahui_produk_tersebut' => 'required|string',
            'materi_konten_berhasil_menarik_perhatian_anda' => 'required|string',
            'bermanfaat_untuk_memahami_kebutuhan_masalah_anda' => 'required|string',
            'membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk' => 'required|string',
            'produk_tersebut_lebih_baik_dari_pesaing' => 'required|string',
            'produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda' => 'required|string',
            'produk_layanan_tersebut_mudah_digunakan' => 'required|string',
            'memberikan_nilai_yang_baik_untuk_uang_anda' => 'required|string',
            'memenuhi_standar_kualitas_yang_diharapkan' => 'required|string',
            'tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian' => 'required|string',
            'proses_pembelian_mudah_dipahami_dan_dilakukan' => 'required|string',
            'tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan' => 'required|string',
            'merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya' => 'required|string',
            'produk_tersebut_memenuhi_ekspektasi_anda' => 'required|string',
            'produk_layanan_tersebut_memenuhi_standar_keamanan' => 'required|string',
            'produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian' => 'required|string',
            'apakah_anda_akan_anda_akan_merekomendasikan_produk_kami' => 'required|string',
            'apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi' => 'required|string',
            'apakah_anda_akan_anda_loyal_terhadap_merk_tersebut' => 'required|string',
            'mengetahui_produk_brand_dari_marketplace' => 'required|string',
            'mengetahui_produk_brand_dari_iklan' => 'required|string',
            'mengetahui_produk_brand_dari_rekan_teman_word_of_mouth' => 'required|string',
            'fitur_kedua_apa_yang_selanjutnya_anda_lihat' => 'required|string',
            'mengetahui_produk_brand_dari_e_mail' => 'required|string',
            'apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm' => 'required|string',
            'tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer' => 'required|string',
        ];
    }

    public function updated($fields){
        $this->validateOnly($fields);
    }

    public function importCustomer(){
        $this->validate([
            'survei_pelanggan' => 'required|mimes:xlsx, xls',
        ]);

        Excel::import(new CustomerImport, $this->survei_pelanggan);

        $this->resetInput();
        $this->dispatch('success');
    }

    public function selectCustomerId($customerId){
        $customer = CustomerModel::find($customerId);

        if($customer){
            $this->customerId = $customer->id;
            $this->usia = $customer->usia;
            $this->jenis_kelamin = $customer->jenis_kelamin;
            $this->pekerjaan = $customer->pekerjaan;
            $this->pendidikan = $customer->pendidikan;
            $this->seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan = $customer->seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan;
            $this->fitur_apa_yang_pertama_kali_anda_lihat = $customer->fitur_apa_yang_pertama_kali_anda_lihat;
            $this->dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda = $customer->dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda;
            $this->apa_yang_akan_sangat_penting_bagi_anda = $customer->apa_yang_akan_sangat_penting_bagi_anda;
            $this->secara_spontan_dan_paling_sesuai_dengan_hidup_anda = $customer->secara_spontan_dan_paling_sesuai_dengan_hidup_anda;
            $this->apakah_anda_biasanya_membuat_keputusan_penting_secara = $customer->apakah_anda_biasanya_membuat_keputusan_penting_secara;
            $this->anda_terdampar_dan_berakhir_di_pulau_terpencil = $customer->anda_terdampar_dan_berakhir_di_pulau_terpencil;
            $this->tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas = $customer->tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas;
            $this->bagaimana_anda_menggambarkan_gaya_busana_favorit_anda = $customer->bagaimana_anda_menggambarkan_gaya_busana_favorit_anda;
            $this->berbagai_kegiatan_rekreasi_ditawarkan_di_hotel = $customer->berbagai_kegiatan_rekreasi_ditawarkan_di_hotel;
            $this->anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari = $customer->anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari;
            $this->pernahkan_anda_melihat_iklan_produk_tersebut = $customer->pernahkan_anda_melihat_iklan_produk_tersebut;
            $this->apakah_informasi_yang_diberikan_cukup_jelas = $customer->apakah_informasi_yang_diberikan_cukup_jelas;
            $this->membantu_memahami_produk_tersebut = $customer->membantu_memahami_produk_tersebut;
            $this->tertarik_untuk_mengetahui_produk_tersebut = $customer->tertarik_untuk_mengetahui_produk_tersebut;
            $this->materi_konten_berhasil_menarik_perhatian_anda = $customer->materi_konten_berhasil_menarik_perhatian_anda;
            $this->bermanfaat_untuk_memahami_kebutuhan_masalah_anda = $customer->bermanfaat_untuk_memahami_kebutuhan_masalah_anda;
            $this->membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk = $customer->membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk;
            $this->produk_tersebut_lebih_baik_dari_pesaing = $customer->produk_tersebut_lebih_baik_dari_pesaing;
            $this->produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda = $customer->produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda;
            $this->produk_layanan_tersebut_mudah_digunakan = $customer->produk_layanan_tersebut_mudah_digunakan;
            $this->memberikan_nilai_yang_baik_untuk_uang_anda = $customer->memberikan_nilai_yang_baik_untuk_uang_anda;
            $this->memenuhi_standar_kualitas_yang_diharapkan = $customer->memenuhi_standar_kualitas_yang_diharapkan;
            $this->tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian = $customer->tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian;
            $this->proses_pembelian_mudah_dipahami_dan_dilakukan = $customer->proses_pembelian_mudah_dipahami_dan_dilakukan;
            $this->tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan = $customer->tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan;
            $this->merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya = $customer->merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya;
            $this->produk_tersebut_memenuhi_ekspektasi_anda = $customer->produk_tersebut_memenuhi_ekspektasi_anda;
            $this->produk_layanan_tersebut_memenuhi_standar_keamanan = $customer->produk_layanan_tersebut_memenuhi_standar_keamanan;
            $this->produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian = $customer->produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian;
            $this->apakah_anda_akan_anda_akan_merekomendasikan_produk_kami = $customer->apakah_anda_akan_anda_akan_merekomendasikan_produk_kami;
            $this->apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi = $customer->apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi;
            $this->apakah_anda_akan_anda_loyal_terhadap_merk_tersebut = $customer->apakah_anda_akan_anda_loyal_terhadap_merk_tersebut;
            $this->mengetahui_produk_brand_dari_marketplace = $customer->mengetahui_produk_brand_dari_marketplace;
            $this->mengetahui_produk_brand_dari_iklan = $customer->mengetahui_produk_brand_dari_iklan;
            $this->mengetahui_produk_brand_dari_rekan_teman_word_of_mouth = $customer->mengetahui_produk_brand_dari_rekan_teman_word_of_mouth;
            $this->fitur_kedua_apa_yang_selanjutnya_anda_lihat = $customer->fitur_kedua_apa_yang_selanjutnya_anda_lihat;
            $this->mengetahui_produk_brand_dari_e_mail = $customer->mengetahui_produk_brand_dari_e_mail;
            $this->apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm = $customer->apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm;
            $this->tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer = $customer->tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer;
        }else{
            return redirect()->route('superadmin.customer');
        }
    }

    public function updateCustomer(){
        $request = $this->validate();

        CustomerModel::where('id', $this->customerId)->update([
            'usia' => $request['usia'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'pekerjaan' => $request['pekerjaan'],
            'pendidikan' => $request['pendidikan'],
            'seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan' => $request['seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan'],
            'fitur_apa_yang_pertama_kali_anda_lihat' => $request['fitur_apa_yang_pertama_kali_anda_lihat'],
            'dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda' => $request['dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda'],
            'apa_yang_akan_sangat_penting_bagi_anda' => $request['apa_yang_akan_sangat_penting_bagi_anda'],
            'secara_spontan_dan_paling_sesuai_dengan_hidup_anda' => $request['secara_spontan_dan_paling_sesuai_dengan_hidup_anda'],
            'apakah_anda_biasanya_membuat_keputusan_penting_secara' => $request['apakah_anda_biasanya_membuat_keputusan_penting_secara'],
            'anda_terdampar_dan_berakhir_di_pulau_terpencil' => $request['anda_terdampar_dan_berakhir_di_pulau_terpencil'],
            'tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas' => $request['tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas'],
            'bagaimana_anda_menggambarkan_gaya_busana_favorit_anda' => $request['bagaimana_anda_menggambarkan_gaya_busana_favorit_anda'],
            'berbagai_kegiatan_rekreasi_ditawarkan_di_hotel' => $request['berbagai_kegiatan_rekreasi_ditawarkan_di_hotel'],
            'anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari' => $request['anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari'],
            'pernahkan_anda_melihat_iklan_produk_tersebut' => $request['pernahkan_anda_melihat_iklan_produk_tersebut'],
            'apakah_informasi_yang_diberikan_cukup_jelas' => $request['apakah_informasi_yang_diberikan_cukup_jelas'],
            'membantu_memahami_produk_tersebut' => $request['membantu_memahami_produk_tersebut'],
            'tertarik_untuk_mengetahui_produk_tersebut' => $request['tertarik_untuk_mengetahui_produk_tersebut'],
            'materi_konten_berhasil_menarik_perhatian_anda' => $request['materi_konten_berhasil_menarik_perhatian_anda'],
            'bermanfaat_untuk_memahami_kebutuhan_masalah_anda' => $request['bermanfaat_untuk_memahami_kebutuhan_masalah_anda'],
            'membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk' => $request['membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk'],
            'produk_tersebut_lebih_baik_dari_pesaing' => $request['produk_tersebut_lebih_baik_dari_pesaing'],
            'produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda' => $request['produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda'],
            'produk_layanan_tersebut_mudah_digunakan' => $request['produk_layanan_tersebut_mudah_digunakan'],
            'memberikan_nilai_yang_baik_untuk_uang_anda' => $request['memberikan_nilai_yang_baik_untuk_uang_anda'],
            'memenuhi_standar_kualitas_yang_diharapkan' => $request['memenuhi_standar_kualitas_yang_diharapkan'],
            'tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian' => $request['tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian'],
            'proses_pembelian_mudah_dipahami_dan_dilakukan' => $request['proses_pembelian_mudah_dipahami_dan_dilakukan'],
            'tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan' => $request['tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan'],
            'merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya' => $request['merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya'],
            'produk_tersebut_memenuhi_ekspektasi_anda' => $request['produk_tersebut_memenuhi_ekspektasi_anda'],
            'produk_layanan_tersebut_memenuhi_standar_keamanan' => $request['produk_layanan_tersebut_memenuhi_standar_keamanan'],
            'produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian' => $request['produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian'],
            'apakah_anda_akan_anda_akan_merekomendasikan_produk_kami' => $request['apakah_anda_akan_anda_akan_merekomendasikan_produk_kami'],
            'apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi' => $request['apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi'],
            'apakah_anda_akan_anda_loyal_terhadap_merk_tersebut' => $request['apakah_anda_akan_anda_loyal_terhadap_merk_tersebut'],
            'mengetahui_produk_brand_dari_marketplace' => $request['mengetahui_produk_brand_dari_marketplace'],
            'mengetahui_produk_brand_dari_iklan' => $request['mengetahui_produk_brand_dari_iklan'],
            'mengetahui_produk_brand_dari_rekan_teman_word_of_mouth' => $request['mengetahui_produk_brand_dari_rekan_teman_word_of_mouth'],
            'fitur_kedua_apa_yang_selanjutnya_anda_lihat' => $request['fitur_kedua_apa_yang_selanjutnya_anda_lihat'],
            'mengetahui_produk_brand_dari_e_mail' => $request['mengetahui_produk_brand_dari_e_mail'],
            'apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm' => $request['apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm'],
            'tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer' => $request['tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer'],
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('success');
    }

    public function deleteCustomer(){
        CustomerModel::where('id', $this->customerId)->update([
            'status' => 2,
        ]);

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('error');
    }

    public function deleteSelectedCustomer(){
        CustomerModel::whereIn('id', $this->selectedCustomers)->update([
            'status' => 2,
        ]);

        $this->selectedCustomers = [];
        $this->selectAll = false;
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('error');
    }

    public function updatedSelectAll($value){
        if($value){
            $this->selectedCustomers = CustomerModel::where('status', 1)->pluck('id');
        }else{
            $this->selectedCustomers = [];
        }
    }

    public function restoreCustomer(){
        CustomerModel::where('id', $this->customerId)->update([
            'status' => 1,
        ]);

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('success');
    }

    public function deletePermanently(){
        CustomerModel::where('id', $this->customerId)->delete();

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('error');
    }

    public function restoreSelectedCustomer(){
        CustomerModel::whereIn('id', $this->selectedCustomers2)->update([
            'status' => 1,
        ]);

        $this->selectedCustomers2 = [];
        $this->selectAll2 = false;
        $this->dispatchBrowserEvent('close-modal');
        $this->emit('success');
    }

    public function deleteSelectedCustomerPermanently(){
        CustomerModel::whereIn('id', $this->selectedCustomers2)->delete();

        $this->selectedCustomers2 = [];
        $this->selectAll2 = false;
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updatedSelectAll2($value){
        if($value){
            $this->selectedCustomers2 = CustomerModel::where('status', 2)->pluck('id');
        }else{
            $this->selectedCustomers2 = [];
        }
    }

    public function closeModal(){
        $this->resetInput();
    }

    public function resetInput(){
        $this->survei_pelanggan = '';
        $this->usia = '';
        $this->jenis_kelamin = '';
        $this->pekerjaan = '';
        $this->pendidikan = '';
        $this->seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan = '';
        $this->fitur_apa_yang_pertama_kali_anda_lihat = '';
        $this->dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda = '';
        $this->apa_yang_akan_sangat_penting_bagi_anda = '';
        $this->secara_spontan_dan_paling_sesuai_dengan_hidup_anda = '';
        $this->apakah_anda_biasanya_membuat_keputusan_penting_secara = '';
        $this->anda_terdampar_dan_berakhir_di_pulau_terpencil = '';
        $this->tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas = '';
        $this->bagaimana_anda_menggambarkan_gaya_busana_favorit_anda = '';
        $this->berbagai_kegiatan_rekreasi_ditawarkan_di_hotel = '';
        $this->anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari = '';
        $this->pernahkan_anda_melihat_iklan_produk_tersebut = '';
        $this->apakah_informasi_yang_diberikan_cukup_jelas = '';
        $this->membantu_memahami_produk_tersebut = '';
        $this->tertarik_untuk_mengetahui_produk_tersebut = '';
        $this->materi_konten_berhasil_menarik_perhatian_anda = '';
        $this->bermanfaat_untuk_memahami_kebutuhan_masalah_anda = '';
        $this->membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk = '';
        $this->produk_tersebut_lebih_baik_dari_pesaing = '';
        $this->produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda = '';
        $this->produk_layanan_tersebut_mudah_digunakan = '';
        $this->memberikan_nilai_yang_baik_untuk_uang_anda = '';
        $this->memenuhi_standar_kualitas_yang_diharapkan = '';
        $this->tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian = '';
        $this->proses_pembelian_mudah_dipahami_dan_dilakukan = '';
        $this->tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan = '';
        $this->merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya = '';
        $this->produk_tersebut_memenuhi_ekspektasi_anda = '';
        $this->produk_layanan_tersebut_memenuhi_standar_keamanan = '';
        $this->produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian = '';
        $this->apakah_anda_akan_anda_akan_merekomendasikan_produk_kami = '';
        $this->apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi = '';
        $this->apakah_anda_akan_anda_loyal_terhadap_merk_tersebut = '';
        $this->mengetahui_produk_brand_dari_marketplace = '';
        $this->mengetahui_produk_brand_dari_iklan = '';
        $this->mengetahui_produk_brand_dari_rekan_teman_word_of_mouth = '';
        $this->fitur_kedua_apa_yang_selanjutnya_anda_lihat = '';
        $this->mengetahui_produk_brand_dari_e_mail = '';
        $this->apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm = '';
        $this->tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer = '';
    }

    public function render()
    {
        $query = CustomerModel::query();
        $query->where(function ($query){
            $query->where('usia', 'like', '%'.$this->search.'%')
            ->orWhere('jenis_kelamin', 'like', '%' . $this->search . '%')
            ->orWhere('pekerjaan', 'like', '%' . $this->search . '%')
            ->orWhere('pendidikan', 'like', '%' . $this->search . '%');
        })->where('status', $this->displayByStatus)->orderBy('id', $this->sortBy);
        $customers = $query->paginate($this->pageLength);

        $this->bulkDisabled = count($this->selectedCustomers) < 1;
        $this->bulkDisabled2 = count($this->selectedCustomers2) < 1;

        return view('livewire.customers.customer', [
            'customers' => $customers,
        ])->extends('templates.pages')->section('content');
    }
}
