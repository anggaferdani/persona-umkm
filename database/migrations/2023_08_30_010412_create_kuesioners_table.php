<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->text('domisili_ukm')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('jabatan')->nullable();
            $table->text('usia')->nullable();
            $table->text('penghasilan')->nullable();
            $table->text('pendidikan')->nullable();
            $table->text('produk_ukm')->nullable();
            $table->text('nomor_ponsel')->nullable();
            $table->text('sudah_menggunakan_e_commerce')->nullable();
            $table->text('lama_usaha')->nullable();
            $table->text('jumlah_karyawan')->nullable();
            $table->text('penjualan_rata_rata_dalam_1_tahun_terakhir')->nullable();
            $table->text('menggunakan_digital_marketing_dalam_kegiatan_usaha')->nullable();
            $table->text('e_commerce_yang_digunakan')->nullable();
            $table->text('telah_menggunakan_e_commerce_selama')->nullable();
            $table->text('peningkatan_pendapatan_setelah_menggunakan_ecommerce')->nullable();
            $table->text('memiliki_website')->nullable();
            $table->text('memiliki_sarana_produksi_sendiri')->nullable();
            $table->text('memiliki_outlet')->nullable();
            $table->text('menggunakan_email_pribadi')->nullable();
            $table->text('meningkatkan_jumlah_transaksi')->nullable();
            $table->text('membantu_produk_menjadi_lebih_mudah_dicari')->nullable();
            $table->text('membantu_konsumen_yang_jauh_dari_lokasi')->nullable();
            $table->text('menambah_jaringan_mitra_usaha')->nullable();
            $table->text('mengurangi_biaya_iklan')->nullable();
            $table->text('memperpanjang_waktu_layanan')->nullable();
            $table->text('tidak_sulit_untuk_mempelajari_penggunaan_aplikasi')->nullable();
            $table->text('tidak_kesulitan_dalam_registrasi')->nullable();
            $table->text('mengunduh_aplikasi_cepat_dan_mudah_dilakukan')->nullable();
            $table->text('menggunakan_aplikasi_e_commerce_tidaklah_sulit')->nullable();
            $table->text('menggunakan_e_commerce_sesuai_dengan_kebutuhan')->nullable();
            $table->text('memiliki_pengetahuan_untuk_menggunakan_e_commerce')->nullable();
            $table->text('memiliki_perangkat_untuk_mengelola_e_commerce')->nullable();
            $table->text('manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan')->nullable();
            $table->text('adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya')->nullable();
            $table->text('adopsi_e_commerce_merupakan_inovasi_penting')->nullable();
            $table->text('memiliki_modal_cukup_untuk_adopsi_e_commerce')->nullable();
            $table->text('siap_menerima_resiko_dari_pemanfaatan_e_commerce')->nullable();
            $table->text('pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce')->nullable();
            $table->text('menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce')->nullable();
            $table->text('memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce')->nullable();
            $table->text('ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce')->nullable();
            $table->text('adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce')->nullable();
            $table->text('adanya_dorongan_dari_perkembangan_dunia_bisnis')->nullable();
            $table->text('adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital')->nullable();
            $table->text('adanya_persaingan_usaha')->nullable();
            $table->text('menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm')->nullable();
            $table->text('menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm')->nullable();
            $table->text('e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm')->nullable();
            $table->text('menggunakan_e_commerce_akan_merugikan_usaha')->nullable();
            $table->text('tertarik_untuk_menggunakan_e_commerce_dalam_usaha')->nullable();
            $table->text('berniat_menggunakan_e_commerce_dalam_usaha')->nullable();
            $table->text('akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce')->nullable();
            $table->text('melihat_keuntungan_ketika_menggunakan_e_commerce')->nullable();
            $table->integer('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioners');
    }
};
