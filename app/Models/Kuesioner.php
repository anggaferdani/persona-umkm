<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kuesioner extends Model
{
    use HasFactory;

    protected $table = 'kuesioners';

    protected $primaryKey = 'id';

    protected $fillable = [
        'domisili_ukm',
        'jenis_kelamin',
        'jabatan',
        'usia',
        'penghasilan',
        'pendidikan',
        'produk_ukm',
        'nomor_ponsel',
        'sudah_menggunakan_e_commerce',
        'lama_usaha',
        'jumlah_karyawan',
        'penjualan_rata_rata_dalam_1_tahun_terakhir',
        'menggunakan_digital_marketing_dalam_kegiatan_usaha',
        'e_commerce_yang_digunakan',
        'telah_menggunakan_e_commerce_selama',
        'peningkatan_pendapatan_setelah_menggunakan_ecommerce',
        'memiliki_website',
        'memiliki_sarana_produksi_sendiri',
        'memiliki_outlet',
        'menggunakan_email_pribadi',
        'meningkatkan_jumlah_transaksi',
        'membantu_produk_menjadi_lebih_mudah_dicari',
        'membantu_konsumen_yang_jauh_dari_lokasi',
        'menambah_jaringan_mitra_usaha',
        'mengurangi_biaya_iklan',
        'memperpanjang_waktu_layanan',
        'tidak_sulit_untuk_mempelajari_penggunaan_aplikasi',
        'tidak_kesulitan_dalam_registrasi',
        'mengunduh_aplikasi_cepat_dan_mudah_dilakukan',
        'menggunakan_aplikasi_e_commerce_tidaklah_sulit',
        'menggunakan_e_commerce_sesuai_dengan_kebutuhan',
        'memiliki_pengetahuan_untuk_menggunakan_e_commerce',
        'memiliki_perangkat_untuk_mengelola_e_commerce',
        'manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan',
        'adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya',
        'adopsi_e_commerce_merupakan_inovasi_penting',
        'memiliki_modal_cukup_untuk_adopsi_e_commerce',
        'siap_menerima_resiko_dari_pemanfaatan_e_commerce',
        'pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce',
        'menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce',
        'memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce',
        'ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce',
        'adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce',
        'adanya_dorongan_dari_perkembangan_dunia_bisnis',
        'adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital',
        'adanya_persaingan_usaha',
        'menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm',
        'menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm',
        'e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm',
        'menggunakan_e_commerce_akan_merugikan_usaha',
        'tertarik_untuk_menggunakan_e_commerce_dalam_usaha',
        'berniat_menggunakan_e_commerce_dalam_usaha',
        'akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce',
        'melihat_keuntungan_ketika_menggunakan_e_commerce',
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
}
