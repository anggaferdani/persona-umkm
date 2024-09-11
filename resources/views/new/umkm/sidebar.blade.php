<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active disabled" style="background: #2388FF;">Menu</a>
  <a href="{{ route('umkm.detail-produk') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.detail-produk') ? 'text-primary' : '' }}">Produk</a>
  <a href="{{ route('umkm.ai') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai') ? 'text-primary' : '' }}">Kenapa AI?</a>
  <a href="{{ route('umkm.ai.generate-text') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-text') ? 'text-primary' : '' }}">AI Generate Text</a>
  <a href="{{ route('umkm.ai.generate-image') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-image', 'umkm.ai.generate-image.temporary', 'umkm.ai.generate-image.response') ? 'text-primary' : '' }}">AI Generate Image</a>
  <a href="{{ route('umkm.ai.generate-tag') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-tag') ? 'text-primary' : '' }}">AI Generate Tag</a>
  <a href="{{ route('umkm.ai.generate-text.histories') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.ai.generate-text.histories', 'umkm.ai.generate-image.histories', 'umkm.ai.generate-tag.histories') ? 'text-primary' : '' }}">History</a>
</div>