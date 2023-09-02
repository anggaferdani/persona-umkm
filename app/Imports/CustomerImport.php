<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CustomerImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'usia' => $row[1],
            'jenis_kelamin' => $row[2],
            'pekerjaan' => $row[3],
            'pendidikan' => $row[4],
            'seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan' => $row[5],
            'fitur_apa_yang_pertama_kali_anda_lihat' => $row[6],
            'dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda' => $row[7],
            'apa_yang_akan_sangat_penting_bagi_anda' => $row[8],
            'secara_spontan_dan_paling_sesuai_dengan_hidup_anda' => $row[9],
            'apakah_anda_biasanya_membuat_keputusan_penting_secara' => $row[10],
            'anda_terdampar_dan_berakhir_di_pulau_terpencil' => $row[11],
            'tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas' => $row[12],
            'bagaimana_anda_menggambarkan_gaya_busana_favorit_anda' => $row[13],
            'berbagai_kegiatan_rekreasi_ditawarkan_di_hotel' => $row[14],
            'anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari' => $row[15],
            'pernahkan_anda_melihat_iklan_produk_tersebut' => $row[16],
            'apakah_informasi_yang_diberikan_cukup_jelas' => $row[17],
            'membantu_memahami_produk_tersebut' => $row[18],
            'tertarik_untuk_mengetahui_produk_tersebut' => $row[19],
            'materi_konten_berhasil_menarik_perhatian_anda' => $row[20],
            'bermanfaat_untuk_memahami_kebutuhan_masalah_anda' => $row[21],
            'membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk' => $row[22],
            'produk_tersebut_lebih_baik_dari_pesaing' => $row[23],
            'produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda' => $row[24],
            'produk_layanan_tersebut_mudah_digunakan' => $row[25],
            'memberikan_nilai_yang_baik_untuk_uang_anda' => $row[26],
            'memenuhi_standar_kualitas_yang_diharapkan' => $row[27],
            'tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian' => $row[28],
            'proses_pembelian_mudah_dipahami_dan_dilakukan' => $row[29],
            'tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan' => $row[30],
            'merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya' => $row[31],
            'produk_tersebut_memenuhi_ekspektasi_anda' => $row[32],
            'produk_layanan_tersebut_memenuhi_standar_keamanan' => $row[33],
            'produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian' => $row[34],
            'apakah_anda_akan_anda_akan_merekomendasikan_produk_kami' => $row[35],
            'apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi' => $row[36],
            'apakah_anda_akan_anda_loyal_terhadap_merk_tersebut' => $row[37],
            'mengetahui_produk_brand_dari_marketplace' => $row[38],
            'mengetahui_produk_brand_dari_iklan' => $row[39],
            'mengetahui_produk_brand_dari_rekan_teman_word_of_mouth' => $row[40],
            'fitur_kedua_apa_yang_selanjutnya_anda_lihat' => $row[41],
            'mengetahui_produk_brand_dari_e_mail' => $row[42],
            'apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm' => $row[43],
            'tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer' => $row[44],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
