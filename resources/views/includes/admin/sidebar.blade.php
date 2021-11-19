<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">Global Jaya</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}">GJ</a>
      </div>
      <ul class="sidebar-menu">
          <li class="active"><a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Service</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">Produk & Layanan</a></li>
              <li><a class="nav-link" href="{{ route('lokasi.index') }}">Lokasi</a></li>
            </ul>
          </li>
        </ul>
    </aside>
  </div>
