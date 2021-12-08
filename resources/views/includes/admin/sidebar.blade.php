<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin.produk.index') }}">Global Jaya Utama</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin.produk.index') }}">GJ</a>
      </div>
      <ul class="sidebar-menu">
          <li class="active"><a class="nav-link" href="{{route('admin.produk.index')}}"><i class="fab fa-servicestack"></i> <span>Produk & Layanan</span></a></li>
          <li class="active"><a class="nav-link" href="{{route('admin.lokasi.index')}}"><i class="fas fa-thumbtack"></i> <span>Lokasi</span></a></li>
          <li class="active"><a class="nav-link" href="{{route('admin.kontak.index')}}"><i class="far fa-address-book"></i> <span>Contact Message</span></a></li>
          {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Service</span></a>
            <ul class="dropdown-menu"> --}}
              {{-- <li><a class="nav-link" href="{{ route('produk.index') }}">Produk & Layanan</a></li>
              <li><a class="nav-link" href="{{ route('lokasi.index') }}">Lokasi</a></li>
              <li><a class="nav-link" href="{{ route('kontak.index') }}">Contact Message</a></li> --}}
            {{-- </ul> --}}
          {{-- </li> --}}
        </ul>
    </aside>
  </div>
