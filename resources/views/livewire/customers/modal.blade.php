<div wire:ignore.self class="modal modal-blur fade" id="showModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Show</h5>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">Usia</label>
          <input readonly type="text" wire:model="usia" class="form-control" name="" placeholder="">
          @error('usia')<div class="text-danger">{{ $message }}</div>@enderror
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
    <form action="" wire:submit.prevent="updateCustomer" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit</h5>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">Usia</label>
          <input type="text" wire:model="usia" class="form-control" name="" placeholder="">
          @error('usia')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jenis Kelamin</label>
          <input type="text" wire:model="jenis_kelamin" class="form-control" name="" placeholder="">
          @error('jenis_kelamin')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pekerjaan</label>
          <input type="text" wire:model="pekerjaan" class="form-control" name="" placeholder="">
          @error('pekerjaan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pendidikan</label>
          <input type="text" wire:model="pendidikan" class="form-control" name="" placeholder="">
          @error('pendidikan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Seberapa Sering Anda melakukan pembelanjaan online dalam sebulan ?</label>
          <input type="text" wire:model="seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan" class="form-control" name="" placeholder="">
          @error('seberapa_sering_anda_melakukan_pembelanjaan_online_dalam_sebulan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika membuka platform digital, fitur apa yang pertama kali anda lihat pada saat berniat belanja online?</label>
          <input type="text" wire:model="fitur_apa_yang_pertama_kali_anda_lihat" class="form-control" name="" placeholder="">
          @error('fitur_apa_yang_pertama_kali_anda_lihat')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="fw-bold mb-3">Bagian ini untuk melihat Kepribadian Pelanggan (8 pertanyaan)</div>
        <div class="mb-3">
          <label class="form-label required">1. Dalam pekerjaan dan tempat kerja Anda, hal ini sangat penting bagi Anda</label>
          <input type="text" wire:model="dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda" class="form-control" name="" placeholder="">
          @error('dalam_pekerjaan_hal_ini_sangat_penting_bagi_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">2. Anda memenangkan hadiah dan sedang membangun rumah baru. Apa yang akan sangat penting bagi Anda?</label>
          <input type="text" wire:model="apa_yang_akan_sangat_penting_bagi_anda" class="form-control" name="" placeholder="">
          @error('apa_yang_akan_sangat_penting_bagi_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">3. Berbagai kelompok istilah tercantum di bawah ini. Silakan pilih grup yang paling menarik bagi Anda secara spontan dan paling sesuai dengan hidup Anda.</label>
          <input type="text" wire:model="secara_spontan_dan_paling_sesuai_dengan_hidup_anda" class="form-control" name="" placeholder="">
          @error('secara_spontan_dan_paling_sesuai_dengan_hidup_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">4. Apakah Anda biasanya membuat keputusan penting secara?</label>
          <input type="text" wire:model="apakah_anda_biasanya_membuat_keputusan_penting_secara" class="form-control" name="" placeholder="">
          @error('apakah_anda_biasanya_membuat_keputusan_penting_secara')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">5. Anda terdampar dan berakhir di pulau terpencil dengan seorang teman. Kualitas apa yang harus teman itu miliki secara khusus?</label>
          <input type="text" wire:model="anda_terdampar_dan_berakhir_di_pulau_terpencil" class="form-control" name="" placeholder="">
          @error('anda_terdampar_dan_berakhir_di_pulau_terpencil')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">6. Tujuan politik mana yang akan Anda kejar sebagai prioritas?</label>
          <input type="text" wire:model="tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas" class="form-control" name="" placeholder="">
          @error('tujuan_politik_mana_yang_akan_anda_kejar_sebagai_prioritas')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">7. Bagaimana Anda menggambarkan gaya busana favorit Anda</label>
          <input type="text" wire:model="bagaimana_anda_menggambarkan_gaya_busana_favorit_anda" class="form-control" name="" placeholder="">
          @error('bagaimana_anda_menggambarkan_gaya_busana_favorit_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">8. Berbagai kegiatan rekreasi ditawarkan di hotel liburan Anda. Mana yang Anda pilih?</label>
          <input type="text" wire:model="berbagai_kegiatan_rekreasi_ditawarkan_di_hotel" class="form-control" name="" placeholder="">
          @error('berbagai_kegiatan_rekreasi_ditawarkan_di_hotel')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Anda biasa mengetahui produk/brand dalam belanja online dari : [Media Sosial]</label>
          <input type="text" wire:model="anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari" class="form-control" name="" placeholder="">
          @error('anda_biasa_mengetahui_produk_brand_dalam_belanja_online_dari')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Pernahkan Anda melihat iklan produk tersebut ?</label>
          <input type="text" wire:model="pernahkan_anda_melihat_iklan_produk_tersebut" class="form-control" name="" placeholder="">
          @error('pernahkan_anda_melihat_iklan_produk_tersebut')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Dalam iklan tersebut apakah informasi yang diberikan [Cukup Jelas]</label>
          <input type="text" wire:model="apakah_informasi_yang_diberikan_cukup_jelas" class="form-control" name="" placeholder="">
          @error('apakah_informasi_yang_diberikan_cukup_jelas')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Dalam iklan tersebut apakah informasi yang diberikan [Membantu memahami produk tersebut]</label>
          <input type="text" wire:model="membantu_memahami_produk_tersebut" class="form-control" name="" placeholder="">
          @error('membantu_memahami_produk_tersebut')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melihat iklan/informasi tersebut apakah Anda [Tertarik untuk mengetahui produk tersebut]</label>
          <input type="text" wire:model="tertarik_untuk_mengetahui_produk_tersebut" class="form-control" name="" placeholder="">
          @error('tertarik_untuk_mengetahui_produk_tersebut')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melihat iklan/informasi tersebut apakah Anda [Materi konten berhasil menarik perhatian Anda]</label>
          <input type="text" wire:model="materi_konten_berhasil_menarik_perhatian_anda" class="form-control" name="" placeholder="">
          @error('materi_konten_berhasil_menarik_perhatian_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melihat iklan/informasi tersebut apakah Anda [Informasi yang diberikan bermanfaat untuk memahami kebutuhan masalah anda]</label>
          <input type="text" wire:model="bermanfaat_untuk_memahami_kebutuhan_masalah_anda" class="form-control" name="" placeholder="">
          @error('bermanfaat_untuk_memahami_kebutuhan_masalah_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika Anda memutuskan untuk membeli produk tersebut, Apakah : [Informasi yang diberikan membantu Anda dalam membandingkan kelebihan dan kekurangan produk]</label>
          <input type="text" wire:model="membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk" class="form-control" name="" placeholder="">
          @error('membantu_dalam_membandingkan_kelebihan_dan_kekurangan_produk')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika Anda memutuskan untuk membeli produk tersebut, Apakah : [Anda yakin bahwa produk tersebut lebih baik dari pesaing]</label>
          <input type="text" wire:model="produk_tersebut_lebih_baik_dari_pesaing" class="form-control" name="" placeholder="">
          @error('produk_tersebut_lebih_baik_dari_pesaing')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika Anda memutuskan untuk membeli produk tersebut, Apakah : [Anda Percaya produk/layanan tersebut dapat memenuhi kebutuhan Anda]</label>
          <input type="text" wire:model="produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda" class="form-control" name="" placeholder="">
          @error('produk_layanan_tersebut_dapat_memenuhi_kebutuhan_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika Anda memutuskan untuk membeli produk tersebut, Apakah : [Anda merasa produk/layanan tersebut mudah digunakan]</label>
          <input type="text" wire:model="produk_layanan_tersebut_mudah_digunakan" class="form-control" name="" placeholder="">
          @error('produk_layanan_tersebut_mudah_digunakan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika Anda memutuskan untuk membeli produk tersebut, Apakah : [Anda merasa produk layanan tersebut memberikan nilai yang baik untuk uang Anda]</label>
          <input type="text" wire:model="memberikan_nilai_yang_baik_untuk_uang_anda" class="form-control" name="" placeholder="">
          @error('memberikan_nilai_yang_baik_untuk_uang_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika Anda memutuskan untuk membeli produk tersebut, Apakah : [Anda merasa produk/layanan tersebut memenuhi standar kualitas yang diharapkan]</label>
          <input type="text" wire:model="memenuhi_standar_kualitas_yang_diharapkan" class="form-control" name="" placeholder="">
          @error('memenuhi_standar_kualitas_yang_diharapkan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Tingkat kepuasan Anda [Pengalaman saat Anda melakukan pembelian/transaksi dengan produk tsb.]</label>
          <input type="text" wire:model="tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian" class="form-control" name="" placeholder="">
          @error('tingkat_kepuasan_anda_pengalaman_saat_anda_melakukan_pembelian')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Tingkat kepuasan Anda [Proses pembelian pemesanan produk tsb mudah dipahami dan dilakukan.]</label>
          <input type="text" wire:model="proses_pembelian_mudah_dipahami_dan_dilakukan" class="form-control" name="" placeholder="">
          @error('proses_pembelian_mudah_dipahami_dan_dilakukan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Tingkat kepuasan Anda [Layanan pelanggan dan dukungan yang kami berikan selama proses transaksi]</label>
          <input type="text" wire:model="tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan" class="form-control" name="" placeholder="">
          @error('tingkat_kepuasan_anda_layanan_pelanggan_yang_kami_berikan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melakukan pembelian [Anda merasa puas setelah menggunakan produk untuk pertama kalinya]</label>
          <input type="text" wire:model="merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya" class="form-control" name="" placeholder="">
          @error('merasa_puas_setelah_menggunakan_produk_untuk_pertama_kalinya')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melakukan pembelian [Produk tersebut memenuhi ekspektasi Anda setelah digunakan secara nyata]</label>
          <input type="text" wire:model="produk_tersebut_memenuhi_ekspektasi_anda" class="form-control" name="" placeholder="">
          @error('produk_tersebut_memenuhi_ekspektasi_anda')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melakukan pembelian [Produk/layanan tersebut memenuhi standar keamanan yang diharapkan setelah pembelian]</label>
          <input type="text" wire:model="produk_layanan_tersebut_memenuhi_standar_keamanan" class="form-control" name="" placeholder="">
          @error('produk_layanan_tersebut_memenuhi_standar_keamanan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melakukan pembelian [Produk tersebut memenuhi standar kualitas setelah pembelian]</label>
          <input type="text" wire:model="produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian" class="form-control" name="" placeholder="">
          @error('produk_tersebut_memenuhi_standar_kualitas_setelah_pembelian')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melakukan pembelian, selanjutnya apakah Anda akan [Anda akan merekomendasikan produk kami kepada rekan/teman]</label>
          <input type="text" wire:model="apakah_anda_akan_anda_akan_merekomendasikan_produk_kami" class="form-control" name="" placeholder="">
          @error('apakah_anda_akan_anda_akan_merekomendasikan_produk_kami')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melakukan pembelian, selanjutnya apakah Anda akan [Anda akan membeli produk tersebut lagi di masa depan ?]</label>
          <input type="text" wire:model="apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi" class="form-control" name="" placeholder="">
          @error('apakah_anda_akan_anda_akan_membeli_produk_tersebut_lagi')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Setelah melakukan pembelian, selanjutnya apakah Anda akan [Anda loyal terhadap merk tersebut]</label>
          <input type="text" wire:model="apakah_anda_akan_anda_loyal_terhadap_merk_tersebut" class="form-control" name="" placeholder="">
          @error('apakah_anda_akan_anda_loyal_terhadap_merk_tersebut')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Anda biasa mengetahui produk/brand dalam belanja online dari : [Marketplace]</label>
          <input type="text" wire:model="mengetahui_produk_brand_dari_marketplace" class="form-control" name="" placeholder="">
          @error('mengetahui_produk_brand_dari_marketplace')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Anda biasa mengetahui produk/brand dalam belanja online dari : [Iklan]</label>
          <input type="text" wire:model="mengetahui_produk_brand_dari_iklan" class="form-control" name="" placeholder="">
          @error('mengetahui_produk_brand_dari_iklan')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Anda biasa mengetahui produk/brand dalam belanja online dari : [Rekan/teman/word of mouth]</label>
          <input type="text" wire:model="mengetahui_produk_brand_dari_rekan_teman_word_of_mouth" class="form-control" name="" placeholder="">
          @error('mengetahui_produk_brand_dari_rekan_teman_word_of_mouth')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Ketika membuka platform digital untuk belanja online, fitur kedua apa yang selanjutnya anda lihat?</label>
          <input type="text" wire:model="fitur_kedua_apa_yang_selanjutnya_anda_lihat" class="form-control" name="" placeholder="">
          @error('fitur_kedua_apa_yang_selanjutnya_anda_lihat')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Anda biasa mengetahui produk/brand dalam belanja online dari : [E-Mail]</label>
          <input type="text" wire:model="mengetahui_produk_brand_dari_e_mail" class="form-control" name="" placeholder="">
          @error('mengetahui_produk_brand_dari_e_mail')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="fw-bold mb-3">Marketer (digital) UKM adalah pelanggan yang memposisikan sebagai marketer untuk memasarkan produk UKM dengan cara menggunakan media sosial atau marketplace melalui konten video.</div>
        <div class="mb-3">
          <label class="form-label required">Apakah Anda bersedia menjadi marketer bagi produk UKM?</label>
          <input type="text" wire:model="apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm" class="form-control" name="" placeholder="">
          @error('apakah_anda_bersedia_menjadi_marketer_bagi_produk_ukm')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label class="form-label required">Jika  bersedia, tolong sebutkan tiga nilai diri Anda yang cocok bagi kami untuk  menjadikan diri Anda sebagai marketer</label>
          <input type="text" wire:model="tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer" class="form-control" name="" placeholder="">
          @error('tiga_nilai_untuk_menjadikan_diri_anda_sebagai_marketer')<div class="text-danger">{{ $message }}</div>@enderror
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
    <form action="" wire:submit.prevent="deleteCustomer" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($customer->id)){{ $customerId }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
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
    <form action="" wire:submit.prevent="deleteSelectedCustomer" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($customer->id)){{ count($selectedCustomers) }}@endif records?</h3>
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
    <form action="" wire:submit.prevent="restoreCustomer" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
        <h3>Are you sure you want to restore this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($customer->id)){{ $customerId }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
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
        <div class="text-muted">Lorem ipsum dolor @if(!empty($customer->id)){{ $customerId }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
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
    <form action="" wire:submit.prevent="restoreSelectedCustomer" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($customer->id)){{ count($selectedCustomers2) }}@endif records?</h3>
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
    <form action="" wire:submit.prevent="deleteSelectedCustomerPermanently" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($customer->id)){{ count($selectedCustomers2) }}@endif records?</h3>
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