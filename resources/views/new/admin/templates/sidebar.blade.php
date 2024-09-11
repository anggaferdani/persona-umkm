<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <img src="{{ asset('logo.png') }}" width="130px" alt="">
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <img src="{{ asset('logo.png') }}" width="30px" alt="">
    </div>
    <ul class="sidebar-menu">
      <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-quote-right"></i><span>Dashboard</span></a>
      </li>
      <li class="{{ Route::is('admin.category-image-template.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.category-image-template.index') }}"><i class="fas fa-quote-right"></i><span>Category Image Template</span></a>
      </li>
      <li class="{{ Route::is('admin.image-template.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.image-template.index') }}"><i class="fas fa-quote-right"></i><span>Image Template</span></a>
      </li>
      <li class="{{ Route::is('admin.jenis-produk.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.jenis-produk.index') }}"><i class="fas fa-quote-right"></i><span>Jenis Produk</span></a>
      </li>
    </ul>
  </aside>
</div>