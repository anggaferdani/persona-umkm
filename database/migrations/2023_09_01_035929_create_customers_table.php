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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->text('usia')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('pekerjaan')->nullable();
            $table->text('pendidikan')->nullable();
            $table->text('seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan')->nullable();
            $table->text('fitur_apa_yang_pertama_kali_anda_lihat')->nullable();
            $table->text('dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda')->nullable();
            $table->text('apa_yang_akan_sangat_penting_bagi_anda')->nullable();
            $table->text('secara_spontan_dan_paling_sesuai_dengan_hidup_anda')->nullable();
            $table->text('apakah_anda_biasanya_membuat_keputusan_penting_secara')->nullable();
            $table->text('anda_terdampar_dan_berakhir_di_pulau_terpencil')->nullable();
            $table->text('tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas')->nullable();
            $table->text('bagaimana_anda_menggambarkan_gaya_busana_favorit_anda')->nullable();
            $table->text('berbagai_kegiatan_rekreasi_ditawarkan_di_hotel')->nullable();
            $table->text('anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari')->nullable();
            $table->text('pernahkan_anda_melihat_iklan_produk_tersebut')->nullable();
            $table->text('apakah_informasi_yang_diberikan_cukup_jelas')->nullable();
            $table->text('membantu_memahami_produk_tersebut')->nullable();
            $table->text('tertarik_untuk_mengetahui_produk_tersebut')->nullable();
            $table->text('materi_konten_berhasil_menarik_perhatian_anda')->nullable();
            $table->text('bermanfaat_untuk_memahami_kebutuhan_masalah_anda')->nullable();
            $table->text('membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk')->nullable();
            $table->text('produk_tersebut_lebih_baik_dari_pesaing')->nullable();
            $table->text('produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda')->nullable();
            $table->text('produk_layanan_tersebut_mudah_digunakan')->nullable();
            $table->text('memberikan_nilai_yang_baik_untuk_uang_anda')->nullable();
            $table->text('memenuhi_standar_kualitas_yang_diharapkan')->nullable();
            $table->text('tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian')->nullable();
            $table->text('proses_pembelian_mudah_dipahami_dan_dilakukan')->nullable();
            $table->text('tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan')->nullable();
            $table->text('merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya')->nullable();
            $table->text('produk_tersebut_memenuhi_ekspektasi_anda')->nullable();
            $table->text('produk_layanan_tersebut_memenuhi_standar_keamanan')->nullable();
            $table->text('produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian')->nullable();
            $table->text('apakah_anda_akan_anda_akan_merekomendasikan_produk_kami')->nullable();
            $table->text('apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi')->nullable();
            $table->text('apakah_anda_akan_anda_loyal_terhadap_merk_tersebut')->nullable();
            $table->text('mengetahui_produk_brand_dari_marketplace')->nullable();
            $table->text('mengetahui_produk_brand_dari_iklan')->nullable();
            $table->text('mengetahui_produk_brand_dari_rekan_teman_word_of_mouth')->nullable();
            $table->text('fitur_kedua_apa_yang_selanjutnya_anda_lihat')->nullable();
            $table->text('mengetahui_produk_brand_dari_e_mail')->nullable();
            $table->text('apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm')->nullable();
            $table->text('tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
