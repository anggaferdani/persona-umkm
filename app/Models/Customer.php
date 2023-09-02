<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'usia',
        'jenis_kelamin',
        'pekerjaan',
        'pendidikan',
        'seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan',
        'fitur_apa_yang_pertama_kali_anda_lihat',
        'dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda',
        'apa_yang_akan_sangat_penting_bagi_anda',
        'secara_spontan_dan_paling_sesuai_dengan_hidup_anda',
        'apakah_anda_biasanya_membuat_keputusan_penting_secara',
        'anda_terdampar_dan_berakhir_di_pulau_terpencil',
        'tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas',
        'bagaimana_anda_menggambarkan_gaya_busana_favorit_anda',
        'berbagai_kegiatan_rekreasi_ditawarkan_di_hotel',
        'anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari',
        'pernahkan_anda_melihat_iklan_produk_tersebut',
        'apakah_informasi_yang_diberikan_cukup_jelas',
        'membantu_memahami_produk_tersebut',
        'tertarik_untuk_mengetahui_produk_tersebut',
        'materi_konten_berhasil_menarik_perhatian_anda',
        'bermanfaat_untuk_memahami_kebutuhan_masalah_anda',
        'membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk',
        'produk_tersebut_lebih_baik_dari_pesaing',
        'produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda',
        'produk_layanan_tersebut_mudah_digunakan',
        'memberikan_nilai_yang_baik_untuk_uang_anda',
        'memenuhi_standar_kualitas_yang_diharapkan',
        'tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian',
        'proses_pembelian_mudah_dipahami_dan_dilakukan',
        'tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan',
        'merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya',
        'produk_tersebut_memenuhi_ekspektasi_anda',
        'produk_layanan_tersebut_memenuhi_standar_keamanan',
        'produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian',
        'apakah_anda_akan_anda_akan_merekomendasikan_produk_kami',
        'apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi',
        'apakah_anda_akan_anda_loyal_terhadap_merk_tersebut',
        'mengetahui_produk_brand_dari_marketplace',
        'mengetahui_produk_brand_dari_iklan',
        'mengetahui_produk_brand_dari_rekan_teman_word_of_mouth',
        'fitur_kedua_apa_yang_selanjutnya_anda_lihat',
        'mengetahui_produk_brand_dari_e_mail',
        'apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm',
        'tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer',
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
