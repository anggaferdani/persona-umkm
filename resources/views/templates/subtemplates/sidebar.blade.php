<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark">
      <a href=".">
        <img src="{{ asset('tabler/static/logo.svg') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
      </a>
    </h1>
    <div class="navbar-nav flex-row d-lg-none">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
          <span class="avatar avatar-sm bg-blue text-blue-fg rounded">S</span>
          <div class="d-none d-xl-block ps-2">
            <div>{{ auth()->user()->name }}</div>
            <div class="mt-1 small text-muted">{{ auth()->user()->email }}</div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <a href="#" class="dropdown-item">Feedback</a>
          <a href="./settings.html" class="dropdown-item">Settings</a>
          <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="sidebar-menu">
      <ul class="navbar-nav pt-lg-3">
        <li class="nav-item"><a class="nav-link" href="{{ route('superadmin.dashboard') }}"><span class="nav-link-title">Dashboard</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('superadmin.project') }}"><span class="nav-link-title">Project</span></a></li>
      </ul>
    </div>
  </div>
</aside>