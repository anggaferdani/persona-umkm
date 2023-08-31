<?php

namespace App\Imports;

use App\Models\Kuesioner;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class KuesionerImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kuesioner([
            'domisili_ukm' => $row[1],
            'jenis_kelamin' => $row[2],
            'jabatan' => $row[3],
            'usia' => $row[4],
            'penghasilan' => $row[5],
            'pendidikan' => $row[6],
            'produk_ukm' => $row[7],
            'nomor_ponsel' => $row[8],
            'sudah_menggunakan_e_commerce' => $row[9],
            'lama_usaha' => $row[10],
            'jumlah_karyawan' => $row[11],
            'penjualan_rata_rata_dalam_1_tahun_terakhir' => $row[12],
            'menggunakan_digital_marketing_dalam_kegiatan_usaha' => $row[13],
            'e_commerce_yang_digunakan' => $row[14],
            'telah_menggunakan_e_commerce_selama' => $row[15],
            'peningkatan_pendapatan_setelah_menggunakan_ecommerce' => $row[16],
            'memiliki_website' => $row[17],
            'memiliki_sarana_produksi_sendiri' => $row[18],
            'memiliki_outlet' => $row[19],
            'menggunakan_email_pribadi' => $row[20],
            'meningkatkan_jumlah_transaksi' => $row[21],
            'membantu_produk_menjadi_lebih_mudah_dicari' => $row[22],
            'membantu_konsumen_yang_jauh_dari_lokasi' => $row[23],
            'menambah_jaringan_mitra_usaha' => $row[24],
            'mengurangi_biaya_iklan' => $row[25],
            'memperpanjang_waktu_layanan' => $row[26],
            'tidak_sulit_untuk_mempelajari_penggunaan_aplikasi' => $row[27],
            'tidak_kesulitan_dalam_registrasi' => $row[28],
            'mengunduh_aplikasi_cepat_dan_mudah_dilakukan' => $row[29],
            'menggunakan_aplikasi_e_commerce_tidaklah_sulit' => $row[30],
            'menggunakan_e_commerce_sesuai_dengan_kebutuhan' => $row[31],
            'memiliki_pengetahuan_untuk_menggunakan_e_commerce' => $row[32],
            'memiliki_perangkat_untuk_mengelola_e_commerce' => $row[33],
            'manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan' => $row[34],
            'adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya' => $row[35],
            'adopsi_e_commerce_merupakan_inovasi_penting' => $row[36],
            'memiliki_modal_cukup_untuk_adopsi_e_commerce' => $row[37],
            'siap_menerima_resiko_dari_pemanfaatan_e_commerce' => $row[38],
            'pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce' => $row[39],
            'menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce' => $row[40],
            'memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce' => $row[41],
            'ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce' => $row[42],
            'adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce' => $row[43],
            'adanya_dorongan_dari_perkembangan_dunia_bisnis' => $row[44],
            'adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital' => $row[45],
            'adanya_persaingan_usaha' => $row[46],
            'menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm' => $row[47],
            'menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm' => $row[48],
            'e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm' => $row[49],
            'menggunakan_e_commerce_akan_merugikan_usaha' => $row[50],
            'tertarik_untuk_menggunakan_e_commerce_dalam_usaha' => $row[51],
            'berniat_menggunakan_e_commerce_dalam_usaha' => $row[52],
            'akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce' => $row[53],
            'melihat_keuntungan_ketika_menggunakan_e_commerce' => $row[54],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
