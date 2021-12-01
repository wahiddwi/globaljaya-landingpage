<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="https://use.fontawesome.com/fce448f006.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-lg navbar-light bg-white" style="">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/logo.png') }}" alt="" width="70" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('/*')) ? 'active' : ""}}" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('tentangkami*')) ? 'active' : ""}}" href="{{ route('user.tentangkami') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('layanan*')) ? 'active' : ""}}" href="{{ route('user.layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{(request()->is('kontak*')) ? 'active' : ""}}" href="{{ route('user.kontak.create') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

                <!--Leaflet-->
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
                integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
                crossorigin=""/>
                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin="">
              </script>
</head>

<body>
    @section('content')
    @show
    <footer>
        <hr>
        <br>
            <div class="container">
                <div class="row">
                    <div class="logo col-12 col-md-3">
                        <img src="{{ asset('assets/logo.png') }}"alt="" style="width: 130px;">
                    </div>
                    <div class="navigate col-12 col-md-3">
                        <h4>Navigasi</h4>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.tentangkami') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.layanan') }}">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.kontak.create') }}">Kontak</a>
                        </li>
                    </div>
                    <div class="navigate col-12 col-md-3">
                        <h4>Hubungi Kami</h4>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-phone"></i> 02131180063</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-envelope"></i>globaljayautama.gju@gmail.com</a>
                        </li>
                    </div>
                    <div class="navigate col-12 col-md-3">
                        <h4>Lokasi</h4>
                        <div id="mapid" style="height: 200px;"></div>
                    </div>
                </div>
            </div>
            <p class="copyright">© 2021 Global Jaya Utama. All rights reserved</p>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://use.fontawesome.com/fce448f006.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/myjs.js') }}"></script>

    <script>
        var mymap = L.map('mapid').setView([-6.205154154013863, 106.84186463929707], 11);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    // maxZoom: 11,
                attribution: '<a href="{{ route('home') }}">GlobalJaya &copy;</a> contributors ' +
                  '',
                id: 'mapbox/streets-v11',
                // tileSize: 512,
                // zoomOffset: -1
              }).addTo(mymap);
                  //marker posisi awal
        //   L.marker([-6.1382687, 106.7428817]).addTo(mymap);
        // var icon = L.icon({
        //   iconUrl: '{{ asset('assets/img/hospital_loc.png') }}', //folder icon
        //   iconSize: [30, 30], //icon size
        // });

        @foreach ($lokasi as $data)
  // menampilkan informasi di map
    var info = '<table><thead><tr><th colspan="2" class="text-center">{{$data->nama}}</th></tr></thead><tbody><tr><td>Alamat</td><td>: {{$data->alamat}}</td></tr><tr><td>No. Telpon</td><td>: {{$data->no_telpon}}</td></tr></tbody></table>';
    // // menampilkan marker
    L.marker([<?=$data->latitude?>, <?=$data->longitude?>])
    .addTo(mymap)
    // menampilkan popup
    .bindPopup(info);
@endforeach

        </script>

</body>

</html>
