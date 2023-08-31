<div wire:ignore.self class="modal modal-blur fade" id="showModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Show</h5>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">UKM Anda berdomisili di</label>
          <input readonly type="text" wire:model="domisili_ukm" class="form-control" name="" placeholder="">
          @error('domisili_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jenis Kelamin</label>
          <input readonly type="text" wire:model="jenis_kelamin" class="form-control" name="" placeholder="">
          @error('jenis_kelamin')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jabatan Anda</label>
          <input readonly type="text" wire:model="jabatan" class="form-control" name="" placeholder="">
          @error('jabatan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Usia Anda</label>
          <input readonly type="text" wire:model="usia" class="form-control" name="" placeholder="">
          @error('usia')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Penghasilan Anda</label>
          <input readonly type="text" wire:model="penghasilan" class="form-control" name="" placeholder="">
          @error('penghasilan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pendidikan Anda</label>
          <input readonly type="text" wire:model="pendidikan" class="form-control" name="" placeholder="">
          @error('pendidikan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Produk UKM Anda</label>
          <input readonly type="text" wire:model="produk_ukm" class="form-control" name="" placeholder="">
          @error('produk_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Nomor ponsel Anda</label>
          <input readonly type="text" wire:model="nomor_ponsel" class="form-control" name="" placeholder="">
          @error('nomor_ponsel')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya sudah menggunakan e-commerce (marketplace, sosial media marketing)</label>
          <input readonly type="text" wire:model="sudah_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('sudah_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Lama usaha</label>
          <input readonly type="text" wire:model="lama_usaha" class="form-control" name="" placeholder="">
          @error('lama_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jumlah karyawan</label>
          <input readonly type="text" wire:model="jumlah_karyawan" class="form-control" name="" placeholder="">
          @error('jumlah_karyawan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Nilai penjualan rata-rata dalam 1 tahun terakhir (Rp)</label>
          <input readonly type="text" wire:model="penjualan_rata_rata_dalam_1_tahun_terakhir" class="form-control" name="" placeholder="">
          @error('penjualan_rata_rata_dalam_1_tahun_terakhir')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Anda menggunakan digital marketing dalam kegiatan usaha</label>
          <input readonly type="text" wire:model="menggunakan_digital_marketing_dalam_kegiatan_usaha" class="form-control" name="" placeholder="">
          @error('menggunakan_digital_marketing_dalam_kegiatan_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">E-Commerce yang digunakan</label>
          <input readonly type="text" wire:model="e_commerce_yang_digunakan" class="form-control" name="" placeholder="">
          @error('e_commerce_yang_digunakan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya telah menggunakan e-commerce selama</label>
          <input readonly type="text" wire:model="telah_menggunakan_e_commerce_selama" class="form-control" name="" placeholder="">
          @error('telah_menggunakan_e_commerce_selama')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ada peningkatan pendapatan UKM setelah menggunakan e-commerce (marketplace, sosial media marketing)</label>
          <input readonly type="text" wire:model="peningkatan_pendapatan_setelah_menggunakan_ecommerce" class="form-control" name="" placeholder="">
          @error('peningkatan_pendapatan_setelah_menggunakan_ecommerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya memiliki website</label>
          <input readonly type="text" wire:model="memiliki_website" class="form-control" name="" placeholder="">
          @error('memiliki_website')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya sudah memiliki sarana produksi sendiri</label>
          <input readonly type="text" wire:model="memiliki_sarana_produksi_sendiri" class="form-control" name="" placeholder="">
          @error('memiliki_sarana_produksi_sendiri')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya memiliki galeri/toko/display outlet produk</label>
          <input readonly type="text" wire:model="memiliki_outlet" class="form-control" name="" placeholder="">
          @error('memiliki_outlet')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya menggunakan email pribadi (bukan email usaha) untuk mengelola usaha di e-commerce</label>
          <input readonly type="text" wire:model="menggunakan_email_pribadi" class="form-control" name="" placeholder="">
          @error('menggunakan_email_pribadi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce dapat meningkatkan jumlah transaksi jual beli</label>
          <input readonly type="text" wire:model="meningkatkan_jumlah_transaksi" class="form-control" name="" placeholder="">
          @error('meningkatkan_jumlah_transaksi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce membantu produk UKM saya menjadi lebih mudah dicari dan dibeli konsumen</label>
          <input readonly type="text" wire:model="membantu_produk_menjadi_lebih_mudah_dicari" class="form-control" name="" placeholder="">
          @error('membantu_produk_menjadi_lebih_mudah_dicari')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce dapat membantu konsumen yang jauh dari lokasi UKM dapat melihat dan membeli produk UKM saya</label>
          <input readonly type="text" wire:model="membantu_konsumen_yang_jauh_dari_lokasi" class="form-control" name="" placeholder="">
          @error('membantu_konsumen_yang_jauh_dari_lokasi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce menambah jaringan mitra usaha (reseller, dropshipper)</label>
          <input readonly type="text" wire:model="menambah_jaringan_mitra_usaha" class="form-control" name="" placeholder="">
          @error('menambah_jaringan_mitra_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce mengurangi biaya iklan/promosi toko/produk saya</label>
          <input readonly type="text" wire:model="mengurangi_biaya_iklan" class="form-control" name="" placeholder="">
          @error('mengurangi_biaya_iklan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce membantu memperpanjang waktu layanan kepada konsumen dan menghemat SDM penjualan</label>
          <input readonly type="text" wire:model="memperpanjang_waktu_layanan" class="form-control" name="" placeholder="">
          @error('memperpanjang_waktu_layanan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Tidak sulit untuk mempelajari penggunaan aplikasi e-commerce</label>
          <input readonly type="text" wire:model="tidak_sulit_untuk_mempelajari_penggunaan_aplikasi" class="form-control" name="" placeholder="">
          @error('tidak_sulit_untuk_mempelajari_penggunaan_aplikasi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya tidak kesulitan dalam registrasi/mendaftar dan aktifasi akun e-commerce UKM</label>
          <input readonly type="text" wire:model="tidak_kesulitan_dalam_registrasi" class="form-control" name="" placeholder="">
          @error('tidak_kesulitan_dalam_registrasi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Mengunduh (download) dan memasang (install) aplikasi e-commerce cepat dan mudah dilakukan</label>
          <input readonly type="text" wire:model="mengunduh_aplikasi_cepat_dan_mudah_dilakukan" class="form-control" name="" placeholder="">
          @error('mengunduh_aplikasi_cepat_dan_mudah_dilakukan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce sesuai dengan kebutuhan UKM saya</label>
          <input readonly type="text" wire:model="menggunakan_e_commerce_sesuai_dengan_kebutuhan" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_sesuai_dengan_kebutuhan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">SDM UKM saya memiliki pengetahuan dan keterampilan untuk menggunakan e-commerce</label>
          <input readonly type="text" wire:model="memiliki_pengetahuan_untuk_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_pengetahuan_untuk_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya memiliki perangkat / gadget (ponsel/tablet/laptop) dan jaringan internet (Wifi/paket data) untuk mengelola e-commerce</label>
          <input readonly type="text" wire:model="memiliki_perangkat_untuk_mengelola_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_perangkat_untuk_mengelola_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Manfaat yang saya dapatkan sesuai dengan biaya yang saya keluarkan dalam penggunaan e-commerce</label>
          <input readonly type="text" wire:model="manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan" class="form-control" name="" placeholder="">
          @error('manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adopsi e-commerce membuat UKM saya tidak nyaman dan ada rasa kuatir tidak mampu mengelolanya dalam kegiatan bisnis</label>
          <input readonly type="text" wire:model="adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya" class="form-control" name="" placeholder="">
          @error('adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adopsi e-commerce merupakan inovasi penting oleh UKM saya dalam penggunaan teknologi informasi dalam bisnis</label>
          <input readonly type="text" wire:model="adopsi_e_commerce_merupakan_inovasi_penting" class="form-control" name="" placeholder="">
          @error('adopsi_e_commerce_merupakan_inovasi_penting')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya memiliki modal cukup untuk adopsi e-commerce</label>
          <input readonly type="text" wire:model="memiliki_modal_cukup_untuk_adopsi_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_modal_cukup_untuk_adopsi_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya siap menerima resiko dari pemanfaatan e-commerce</label>
          <input readonly type="text" wire:model="siap_menerima_resiko_dari_pemanfaatan_e_commerce" class="form-control" name="" placeholder="">
          @error('siap_menerima_resiko_dari_pemanfaatan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pimpinan UKM saya siap berkomitmen untuk menerapkan e-commerce dalam penjualan produk</label>
          <input readonly type="text" wire:model="pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce" class="form-control" name="" placeholder="">
          @error('pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya menerima perubahan dan perkembangan teknologi informasi dalam penggunaan e-commerce</label>
          <input readonly type="text" wire:model="menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce" class="form-control" name="" placeholder="">
          @error('menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya memiliki karyawan yang siap dan mudah beradaptasi dalam penggunaan e-commerce</label>
          <input readonly type="text" wire:model="memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ada dorongan dan tuntutan dari konsumen yang memotivasi UKM saya untuk mengadopsi e-commerce</label>
          <input readonly type="text" wire:model="ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce" class="form-control" name="" placeholder="">
          @error('ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya dorongan dan tuntutan pemasok/suplier untuk menggunakan e-commerce</label>
          <input readonly type="text" wire:model="adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya dorongan dan tuntutan perkembangan dunia bisnis yang berkembang secara online mendorong UKM saya untuk adopsi e-commerce</label>
          <input readonly type="text" wire:model="adanya_dorongan_dari_perkembangan_dunia_bisnis" class="form-control" name="" placeholder="">
          @error('adanya_dorongan_dari_perkembangan_dunia_bisnis')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya dorongan pemerintah agar UKM go online/go digital dalam pemasaran dan penjualan produknya sehingga mendorong saya mengadopsi e-commerce</label>
          <input readonly type="text" wire:model="adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital" class="form-control" name="" placeholder="">
          @error('adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya persaingan usaha sehingga saya mengadopsi e-commerce</label>
          <input readonly type="text" wire:model="adanya_persaingan_usaha" class="form-control" name="" placeholder="">
          @error('adanya_persaingan_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya senang menggunakan e-commerce dapat meningkatkan pendapatan UKM saya</label>
          <input readonly type="text" wire:model="menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya yakin menggunakan e-commerce akan meningkatkan keunggulan UKM saya</label>
          <input readonly type="text" wire:model="menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya yakin e-commerce sangat bermanfaat dalam menunjang usaha UKM saya</label>
          <input readonly type="text" wire:model="e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm" class="form-control" name="" placeholder="">
          @error('e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya tidak yakin bahwa menggunakan e-commerce akan merugikan usaha saya</label>
          <input readonly type="text" wire:model="menggunakan_e_commerce_akan_merugikan_usaha" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_akan_merugikan_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya sangat tertarik untuk menggunakan e-commerce dalam usaha</label>
          <input readonly type="text" wire:model="tertarik_untuk_menggunakan_e_commerce_dalam_usaha" class="form-control" name="" placeholder="">
          @error('tertarik_untuk_menggunakan_e_commerce_dalam_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya berniat menggunakan e-commerce dalam usaha saya</label>
          <input readonly type="text" wire:model="berniat_menggunakan_e_commerce_dalam_usaha" class="form-control" name="" placeholder="">
          @error('berniat_menggunakan_e_commerce_dalam_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya akan merekomendasikan dan mengajak kepada kawan UKM saya untuk menggunakan e-commerce</label>
          <input readonly type="text" wire:model="akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya melihat keuntungan ketika menggunakan e-commerce dan itu membuat saya tertarik untuk menggunakan e-commerce</label>
          <input readonly type="text" wire:model="melihat_keuntungan_ketika_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('melihat_keuntungan_ketika_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="updateKuesioner" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit</h5>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">UKM Anda berdomisili di</label>
          <input type="text" wire:model="domisili_ukm" class="form-control" name="" placeholder="">
          @error('domisili_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jenis Kelamin</label>
          <input type="text" wire:model="jenis_kelamin" class="form-control" name="" placeholder="">
          @error('jenis_kelamin')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jabatan Anda</label>
          <input type="text" wire:model="jabatan" class="form-control" name="" placeholder="">
          @error('jabatan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Usia Anda</label>
          <input type="text" wire:model="usia" class="form-control" name="" placeholder="">
          @error('usia')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Penghasilan Anda</label>
          <input type="text" wire:model="penghasilan" class="form-control" name="" placeholder="">
          @error('penghasilan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pendidikan Anda</label>
          <input type="text" wire:model="pendidikan" class="form-control" name="" placeholder="">
          @error('pendidikan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Produk UKM Anda</label>
          <input type="text" wire:model="produk_ukm" class="form-control" name="" placeholder="Produk UKM">
          @error('produk_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Nomor ponsel Anda</label>
          <input type="text" wire:model="nomor_ponsel" class="form-control" name="" placeholder="">
          @error('nomor_ponsel')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya sudah menggunakan e-commerce (marketplace, sosial media marketing)</label>
          <input type="text" wire:model="sudah_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('sudah_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Lama usaha</label>
          <input type="text" wire:model="lama_usaha" class="form-control" name="" placeholder="">
          @error('lama_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jumlah karyawan</label>
          <input type="text" wire:model="jumlah_karyawan" class="form-control" name="" placeholder="">
          @error('jumlah_karyawan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Nilai penjualan rata-rata dalam 1 tahun terakhir (Rp)</label>
          <input type="text" wire:model="penjualan_rata_rata_dalam_1_tahun_terakhir" class="form-control" name="" placeholder="">
          @error('penjualan_rata_rata_dalam_1_tahun_terakhir')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Anda menggunakan digital marketing dalam kegiatan usaha</label>
          <input type="text" wire:model="menggunakan_digital_marketing_dalam_kegiatan_usaha" class="form-control" name="" placeholder="">
          @error('menggunakan_digital_marketing_dalam_kegiatan_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">E-Commerce yang digunakan</label>
          <input type="text" wire:model="e_commerce_yang_digunakan" class="form-control" name="" placeholder="">
          @error('e_commerce_yang_digunakan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya telah menggunakan e-commerce selama</label>
          <input type="text" wire:model="telah_menggunakan_e_commerce_selama" class="form-control" name="" placeholder="">
          @error('telah_menggunakan_e_commerce_selama')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ada peningkatan pendapatan UKM setelah menggunakan e-commerce (marketplace, sosial media marketing)</label>
          <input type="text" wire:model="peningkatan_pendapatan_setelah_menggunakan_ecommerce" class="form-control" name="" placeholder="">
          @error('peningkatan_pendapatan_setelah_menggunakan_ecommerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya memiliki website</label>
          <input type="text" wire:model="memiliki_website" class="form-control" name="" placeholder="">
          @error('memiliki_website')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya sudah memiliki sarana produksi sendiri</label>
          <input type="text" wire:model="memiliki_sarana_produksi_sendiri" class="form-control" name="" placeholder="">
          @error('memiliki_sarana_produksi_sendiri')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya memiliki galeri/toko/display outlet produk</label>
          <input type="text" wire:model="memiliki_outlet" class="form-control" name="" placeholder="">
          @error('memiliki_outlet')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM Saya menggunakan email pribadi (bukan email usaha) untuk mengelola usaha di e-commerce</label>
          <input type="text" wire:model="menggunakan_email_pribadi" class="form-control" name="" placeholder="">
          @error('menggunakan_email_pribadi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce dapat meningkatkan jumlah transaksi jual beli</label>
          <input type="text" wire:model="meningkatkan_jumlah_transaksi" class="form-control" name="" placeholder="">
          @error('meningkatkan_jumlah_transaksi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce membantu produk UKM saya menjadi lebih mudah dicari dan dibeli konsumen</label>
          <input type="text" wire:model="membantu_produk_menjadi_lebih_mudah_dicari" class="form-control" name="" placeholder="">
          @error('membantu_produk_menjadi_lebih_mudah_dicari')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce dapat membantu konsumen yang jauh dari lokasi UKM dapat melihat dan membeli produk UKM saya</label>
          <input type="text" wire:model="membantu_konsumen_yang_jauh_dari_lokasi" class="form-control" name="" placeholder="">
          @error('membantu_konsumen_yang_jauh_dari_lokasi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce menambah jaringan mitra usaha (reseller, dropshipper)</label>
          <input type="text" wire:model="menambah_jaringan_mitra_usaha" class="form-control" name="" placeholder="">
          @error('menambah_jaringan_mitra_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce mengurangi biaya iklan/promosi toko/produk saya</label>
          <input type="text" wire:model="mengurangi_biaya_iklan" class="form-control" name="" placeholder="">
          @error('mengurangi_biaya_iklan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce membantu memperpanjang waktu layanan kepada konsumen dan menghemat SDM penjualan</label>
          <input type="text" wire:model="memperpanjang_waktu_layanan" class="form-control" name="" placeholder="">
          @error('memperpanjang_waktu_layanan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Tidak sulit untuk mempelajari penggunaan aplikasi e-commerce</label>
          <input type="text" wire:model="tidak_sulit_untuk_mempelajari_penggunaan_aplikasi" class="form-control" name="" placeholder="">
          @error('tidak_sulit_untuk_mempelajari_penggunaan_aplikasi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya tidak kesulitan dalam registrasi/mendaftar dan aktifasi akun e-commerce UKM</label>
          <input type="text" wire:model="tidak_kesulitan_dalam_registrasi" class="form-control" name="" placeholder="">
          @error('tidak_kesulitan_dalam_registrasi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Mengunduh (download) dan memasang (install) aplikasi e-commerce cepat dan mudah dilakukan</label>
          <input type="text" wire:model="mengunduh_aplikasi_cepat_dan_mudah_dilakukan" class="form-control" name="" placeholder="">
          @error('mengunduh_aplikasi_cepat_dan_mudah_dilakukan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Menggunakan e-commerce sesuai dengan kebutuhan UKM saya</label>
          <input type="text" wire:model="menggunakan_e_commerce_sesuai_dengan_kebutuhan" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_sesuai_dengan_kebutuhan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">SDM UKM saya memiliki pengetahuan dan keterampilan untuk menggunakan e-commerce</label>
          <input type="text" wire:model="memiliki_pengetahuan_untuk_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_pengetahuan_untuk_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya memiliki perangkat / gadget (ponsel/tablet/laptop) dan jaringan internet (Wifi/paket data) untuk mengelola e-commerce</label>
          <input type="text" wire:model="memiliki_perangkat_untuk_mengelola_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_perangkat_untuk_mengelola_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Manfaat yang saya dapatkan sesuai dengan biaya yang saya keluarkan dalam penggunaan e-commerce</label>
          <input type="text" wire:model="manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan" class="form-control" name="" placeholder="">
          @error('manfaat_yang_didapatkan_sesuai_dengan_biaya_yang_dikeluarkan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adopsi e-commerce membuat UKM saya tidak nyaman dan ada rasa kuatir tidak mampu mengelolanya dalam kegiatan bisnis</label>
          <input type="text" wire:model="adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya" class="form-control" name="" placeholder="">
          @error('adopsi_e_commerce_membuat_rasa_kuatir_tidak_mampu_mengelolanya')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adopsi e-commerce merupakan inovasi penting oleh UKM saya dalam penggunaan teknologi informasi dalam bisnis</label>
          <input type="text" wire:model="adopsi_e_commerce_merupakan_inovasi_penting" class="form-control" name="" placeholder="">
          @error('adopsi_e_commerce_merupakan_inovasi_penting')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya memiliki modal cukup untuk adopsi e-commerce</label>
          <input type="text" wire:model="memiliki_modal_cukup_untuk_adopsi_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_modal_cukup_untuk_adopsi_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya siap menerima resiko dari pemanfaatan e-commerce</label>
          <input type="text" wire:model="siap_menerima_resiko_dari_pemanfaatan_e_commerce" class="form-control" name="" placeholder="">
          @error('siap_menerima_resiko_dari_pemanfaatan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pimpinan UKM saya siap berkomitmen untuk menerapkan e-commerce dalam penjualan produk</label>
          <input type="text" wire:model="pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce" class="form-control" name="" placeholder="">
          @error('pimpinan_siap_berkomitmen_untuk_menerapkan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya menerima perubahan dan perkembangan teknologi informasi dalam penggunaan e-commerce</label>
          <input type="text" wire:model="menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce" class="form-control" name="" placeholder="">
          @error('menerima_perubahan_dan_perkembangan_dalam_penggunaan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">UKM saya memiliki karyawan yang siap dan mudah beradaptasi dalam penggunaan e-commerce</label>
          <input type="text" wire:model="memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce" class="form-control" name="" placeholder="">
          @error('memiliki_karyawan_yang_siap_dalam_penggunaan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ada dorongan dan tuntutan dari konsumen yang memotivasi UKM saya untuk mengadopsi e-commerce</label>
          <input type="text" wire:model="ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce" class="form-control" name="" placeholder="">
          @error('ada_dorongan_dari_konsumen_untuk_mengadopsi_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya dorongan dan tuntutan pemasok/suplier untuk menggunakan e-commerce</label>
          <input type="text" wire:model="adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('adanya_dorongan_pemasoksuplier_untuk_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya dorongan dan tuntutan perkembangan dunia bisnis yang berkembang secara online mendorong UKM saya untuk adopsi e-commerce</label>
          <input type="text" wire:model="adanya_dorongan_dari_perkembangan_dunia_bisnis" class="form-control" name="" placeholder="">
          @error('adanya_dorongan_dari_perkembangan_dunia_bisnis')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya dorongan pemerintah agar UKM go online/go digital dalam pemasaran dan penjualan produknya sehingga mendorong saya mengadopsi e-commerce</label>
          <input type="text" wire:model="adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital" class="form-control" name="" placeholder="">
          @error('adanya_dorongan_pemerintah_agar_ukm_go_online_go_digital')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Adanya persaingan usaha sehingga saya mengadopsi e-commerce</label>
          <input type="text" wire:model="adanya_persaingan_usaha" class="form-control" name="" placeholder="">
          @error('adanya_persaingan_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya senang menggunakan e-commerce dapat meningkatkan pendapatan UKM saya</label>
          <input type="text" wire:model="menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_dapat_meningkatkan_pendapatan_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya yakin menggunakan e-commerce akan meningkatkan keunggulan UKM saya</label>
          <input type="text" wire:model="menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_akan_meningkatkan_keunggulan_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya yakin e-commerce sangat bermanfaat dalam menunjang usaha UKM saya</label>
          <input type="text" wire:model="e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm" class="form-control" name="" placeholder="">
          @error('e_commerce_sangat_bermanfaat_dalam_menunjang_usaha_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya tidak yakin bahwa menggunakan e-commerce akan merugikan usaha saya</label>
          <input type="text" wire:model="menggunakan_e_commerce_akan_merugikan_usaha" class="form-control" name="" placeholder="">
          @error('menggunakan_e_commerce_akan_merugikan_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya sangat tertarik untuk menggunakan e-commerce dalam usaha</label>
          <input type="text" wire:model="tertarik_untuk_menggunakan_e_commerce_dalam_usaha" class="form-control" name="" placeholder="">
          @error('tertarik_untuk_menggunakan_e_commerce_dalam_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya berniat menggunakan e-commerce dalam usaha saya</label>
          <input type="text" wire:model="berniat_menggunakan_e_commerce_dalam_usaha" class="form-control" name="" placeholder="">
          @error('berniat_menggunakan_e_commerce_dalam_usaha')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya akan merekomendasikan dan mengajak kepada kawan UKM saya untuk menggunakan e-commerce</label>
          <input type="text" wire:model="akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('akan_merekomendasikan_kepada_kawan_untuk_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Saya melihat keuntungan ketika menggunakan e-commerce dan itu membuat saya tertarik untuk menggunakan e-commerce</label>
          <input type="text" wire:model="melihat_keuntungan_ketika_menggunakan_e_commerce" class="form-control" name="" placeholder="">
          @error('melihat_keuntungan_ketika_menggunakan_e_commerce')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Submit</button>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deleteKuesioner" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($kuesioner->id)){{ $kuesionerId }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deleteSelectedModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deleteSelectedKuesioner" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($kuesioner->id)){{ count($selectedKuesioners) }}@endif records?</h3>
        <div class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="restoreModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="restoreKuesioner" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
        <h3>Are you sure you want to restore this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($kuesioner->id)){{ $kuesionerId }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-success w-100" data-bs-dismiss="modal">Restore</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deletePermanentlyModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deletePermanently" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete permanently this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($kuesioner->id)){{ $kuesionerId }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete permanently</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="restoreSelectedModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="restoreSelectedKuesioner" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($kuesioner->id)){{ count($selectedKuesioners2) }}@endif records?</h3>
        <div class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-success w-100" data-bs-dismiss="modal">Restore</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deleteSelectedModalPermanently" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deleteSelectedKuesionerPermanently" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($kuesioner->id)){{ count($selectedKuesioners2) }}@endif records?</h3>
        <div class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>