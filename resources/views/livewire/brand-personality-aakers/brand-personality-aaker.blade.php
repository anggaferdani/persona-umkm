
    @if(Session('error'))
      <div class="card mb-3">
        <div class="card-body">
          {{ session('error') }}
        </div>
      </div>
    @endif

    @if(Session::has('brand_personality_aaker_result'))
      <div class="card mb-3">
        <div class="card-body">
          <div class="mb-3">
            @foreach(session('brand_personality_aaker_result') as $brand_personality_aaker_result)
              {{ $brand_personality_aaker_result['brand_personality_aaker'] }} : {{ $brand_personality_aaker_result['result'] }}<br>
            @endforeach
          </div>
          <button wire:click="clearSessionVariable" class="btn btn-primary">Clear Session Variable</button>
        </div>
      </div>
    @endif

    <form action="" wire:submit.prevent="createBrandPersonalityAaker" class="card" method="post" autocomplete="off" enctype="multipart/form-data" novalidate>
      @csrf
      <div class="card-header">
        <h3 class="card-title">Berikut adalah contoh pertanyaan yang dapat digunakan untuk mengukur Brand Personality Aaker :</h3>
      </div>
      <div class="card-body">
        <h3 class="card-title">1. Sincerity: Merek ini...</h3>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Hangat dan ramah</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_hangat_dan_ramah" name="sincerity_hangat_dan_ramah" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_hangat_dan_ramah" name="sincerity_hangat_dan_ramah" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_hangat_dan_ramah" name="sincerity_hangat_dan_ramah" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_hangat_dan_ramah" name="sincerity_hangat_dan_ramah" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_hangat_dan_ramah" name="sincerity_hangat_dan_ramah" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Penuh kasih sayang</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_penuh_kasih_sayang" name="sincerity_penuh_kasih_sayang" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_penuh_kasih_sayang" name="sincerity_penuh_kasih_sayang" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_penuh_kasih_sayang" name="sincerity_penuh_kasih_sayang" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_penuh_kasih_sayang" name="sincerity_penuh_kasih_sayang" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_penuh_kasih_sayang" name="sincerity_penuh_kasih_sayang" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Tulus</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_tulus" name="sincerity_tulus" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_tulus" name="sincerity_tulus" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_tulus" name="sincerity_tulus" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_tulus" name="sincerity_tulus" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_tulus" name="sincerity_tulus" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Jujur</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_jujur" name="sincerity_jujur" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_jujur" name="sincerity_jujur" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_jujur" name="sincerity_jujur" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_jujur" name="sincerity_jujur" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_jujur" name="sincerity_jujur" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Dapat dipercaya</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_dapat_dipercaya" name="sincerity_dapat_dipercaya" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_dapat_dipercaya" name="sincerity_dapat_dipercaya" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_dapat_dipercaya" name="sincerity_dapat_dipercaya" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_dapat_dipercaya" name="sincerity_dapat_dipercaya" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sincerity_dapat_dipercaya" name="sincerity_dapat_dipercaya" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <h3 class="card-title">2. Competence: Merek ini...</h3>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Andal</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_andal" name="competence_andal" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_andal" name="competence_andal" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_andal" name="competence_andal" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_andal" name="competence_andal" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_andal" name="competence_andal" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Terpercaya</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_terpercaya" name="competence_terpercaya" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_terpercaya" name="competence_terpercaya" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_terpercaya" name="competence_terpercaya" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_terpercaya" name="competence_terpercaya" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_terpercaya" name="competence_terpercaya" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Memiliki reputasi yang baik</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memiliki_reputasi_yang_baik" name="competence_memiliki_reputasi_yang_baik" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memiliki_reputasi_yang_baik" name="competence_memiliki_reputasi_yang_baik" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memiliki_reputasi_yang_baik" name="competence_memiliki_reputasi_yang_baik" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memiliki_reputasi_yang_baik" name="competence_memiliki_reputasi_yang_baik" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memiliki_reputasi_yang_baik" name="competence_memiliki_reputasi_yang_baik" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Berkinerja baik</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_berkinerja_baik" name="competence_berkinerja_baik" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_berkinerja_baik" name="competence_berkinerja_baik" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_berkinerja_baik" name="competence_berkinerja_baik" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_berkinerja_baik" name="competence_berkinerja_baik" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_berkinerja_baik" name="competence_berkinerja_baik" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Memberikan nilai</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memberikan_nilai" name="competence_memberikan_nilai" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memberikan_nilai" name="competence_memberikan_nilai" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memberikan_nilai" name="competence_memberikan_nilai" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memberikan_nilai" name="competence_memberikan_nilai" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="competence_memberikan_nilai" name="competence_memberikan_nilai" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <h3 class="card-title">3. Excitement: Merek ini...</h3>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Inovatif</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_inovatif" name="excitement_inovatif" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_inovatif" name="excitement_inovatif" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_inovatif" name="excitement_inovatif" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_inovatif" name="excitement_inovatif" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_inovatif" name="excitement_inovatif" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Menarik</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menarik" name="excitement_menarik" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menarik" name="excitement_menarik" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menarik" name="excitement_menarik" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menarik" name="excitement_menarik" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menarik" name="excitement_menarik" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Penuh semangat</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_penuh_semangat" name="excitement_penuh_semangat" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_penuh_semangat" name="excitement_penuh_semangat" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_penuh_semangat" name="excitement_penuh_semangat" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_penuh_semangat" name="excitement_penuh_semangat" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_penuh_semangat" name="excitement_penuh_semangat" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Menyenangkan</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menyenangkan" name="excitement_menyenangkan" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menyenangkan" name="excitement_menyenangkan" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menyenangkan" name="excitement_menyenangkan" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menyenangkan" name="excitement_menyenangkan" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_menyenangkan" name="excitement_menyenangkan" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Selalu ada yang baru</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_selalu_ada_yang_baru" name="excitement_selalu_ada_yang_baru" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_selalu_ada_yang_baru" name="excitement_selalu_ada_yang_baru" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_selalu_ada_yang_baru" name="excitement_selalu_ada_yang_baru" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_selalu_ada_yang_baru" name="excitement_selalu_ada_yang_baru" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="excitement_selalu_ada_yang_baru" name="excitement_selalu_ada_yang_baru" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <h3 class="card-title">4. Sophistication: Merek ini...</h3>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Elegan</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_elegan" name="sophistication_elegan" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_elegan" name="sophistication_elegan" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_elegan" name="sophistication_elegan" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_elegan" name="sophistication_elegan" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_elegan" name="sophistication_elegan" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Berkelas</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_berkelas" name="sophistication_berkelas" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_berkelas" name="sophistication_berkelas" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_berkelas" name="sophistication_berkelas" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_berkelas" name="sophistication_berkelas" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_berkelas" name="sophistication_berkelas" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Bergaya</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_bergaya" name="sophistication_bergaya" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_bergaya" name="sophistication_bergaya" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_bergaya" name="sophistication_bergaya" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_bergaya" name="sophistication_bergaya" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_bergaya" name="sophistication_bergaya" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Canggih</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_canggih" name="sophistication_canggih" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_canggih" name="sophistication_canggih" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_canggih" name="sophistication_canggih" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_canggih" name="sophistication_canggih" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_canggih" name="sophistication_canggih" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Mewah</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_mewah" name="sophistication_mewah" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_mewah" name="sophistication_mewah" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_mewah" name="sophistication_mewah" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_mewah" name="sophistication_mewah" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="sophistication_mewah" name="sophistication_mewah" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <h3 class="card-title">5. Ruggedness: Merek ini...</h3>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Tangguh</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tangguh" name="ruggedness_tangguh" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tangguh" name="ruggedness_tangguh" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tangguh" name="ruggedness_tangguh" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tangguh" name="ruggedness_tangguh" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tangguh" name="ruggedness_tangguh" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Berkelas</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berkelas" name="ruggedness_berkelas" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berkelas" name="ruggedness_berkelas" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berkelas" name="ruggedness_berkelas" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berkelas" name="ruggedness_berkelas" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berkelas" name="ruggedness_berkelas" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Mandiri</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_mandiri" name="ruggedness_mandiri" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_mandiri" name="ruggedness_mandiri" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_mandiri" name="ruggedness_mandiri" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_mandiri" name="ruggedness_mandiri" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_mandiri" name="ruggedness_mandiri" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Berani</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berani" name="ruggedness_berani" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berani" name="ruggedness_berani" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berani" name="ruggedness_berani" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berani" name="ruggedness_berani" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_berani" name="ruggedness_berani" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-4"><label class="form-label required">Tidak takut mengambil risiko</label></div>
          <div class="col">
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tidak_takut_mengambil_risiko" name="ruggedness_tidak_takut_mengambil_risiko" value="1"><span class="form-check-label">1</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tidak_takut_mengambil_risiko" name="ruggedness_tidak_takut_mengambil_risiko" value="2"><span class="form-check-label">2</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tidak_takut_mengambil_risiko" name="ruggedness_tidak_takut_mengambil_risiko" value="3"><span class="form-check-label">3</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tidak_takut_mengambil_risiko" name="ruggedness_tidak_takut_mengambil_risiko" value="4"><span class="form-check-label">4</span></label>
            <label class="form-check form-check-inline"><input class="form-check-input" type="radio" wire:model.defer="ruggedness_tidak_takut_mengambil_risiko" name="ruggedness_tidak_takut_mengambil_risiko" value="5"><span class="form-check-label">5</span></label>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-label">Gender</div>
          <select class="form-select" wire:model.defer="gender">
            <option value="men">Men</option>
            <option value="women">Women</option>
          </select>
        </div>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>