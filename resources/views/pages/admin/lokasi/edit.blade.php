@extends('layouts.app')
@section('title', 'Edit Lokasi')

@push('page-styles')

    <!--Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

@endpush

@section('content')

    <div class="section-body">
        <div class="card">
            <div class="row">
                <div class="col-12 col-md col-lg-6">
                    <form action="{{ route('lokasi.update', $lokasi->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputAddress2">Nama Perusahaan</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" id="inputAddress2" value="{{ $lokasi->nama }}" placeholder="Nama Perusahaan" required>
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" id="inputAddress2" value="{{ $lokasi->alamat }}" placeholder="Alamat" required>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Latitude</label>
                                <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                    name="latitude" id="inputAddress2" value="{{ $lokasi->latitude }}" placeholder="Latitude" required readonly>
                                    @error('latitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Longitude</label>
                                <input type="text" class="form-control @error('longitude') is-invalid @enderror"
                                    name="longitude" id="inputAddress2" value="{{ $lokasi->longitude }}" placeholder="Longitude" required readonly>
                                    @error('longitude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">No. Telpon</label>
                                <input type="text" class="form-control @error('no_telpon') is-invalid @enderror"
                                    name="no_telpon" id="inputAddress2" value="{{ $lokasi->no_telpon }}" placeholder="No. telpon" required>
                                    @error('no_telpon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="inputAddress2" value="{{ $lokasi->email }}" placeholder="email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    {{-- <div class="card"> --}}
                        {{-- <div class="card-header">
                            <h4>Lokasi Perusahaan</h4>
                        </div> --}}
                        <div class="card-body">
                            <div id="mapid" style="height:500px;"></div>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        var map = L.map('mapid').setView([-6.205154154013863, 106.84186463929707], 15);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        // maxZoom: 11,
        attribution: '<a href="{{ route('dashboard') }}">GlobalJaya &copy;</a> contributors '
          ,
        id: 'mapbox/streets-v11',
        // tileSize: 512,
        // zoomOffset: -1
        }).addTo(map);

        //mengambil titik kordinat
        var curLocation = [-6.205154154013863, 106.84186463929707];
        map.attributionControl.setPrefix(false);
        var marker = new L.marker(curLocation, {
          draggable : 'true',
        });
        map.addLayer(marker);

      //mengambil titik kordinat saat marker di drag
      marker.on('dragend', function(event) {
      var position = marker.getLatLng();
      marker.setLatLng(position,{
      	draggable : 'true'
      	}).bindPopup(position).update();
      	$("#latitude").val(position.lat);
      	$("#longitude").val(position.lng).keyup();
      });

        //ambil titik kordinat saat marker di klik
        var latitude = document.querySelector("[name=latitude]");
          var longitude = document.querySelector("[name=longitude]");
          map.on("click", function(event){
            var lat = event.latlng.lat;
            var lng = event.latlng.lng;
            if (!marker) {
              marker = L.marker(event.latlng).addTo(map);
            } else {
              marker.setLatLng(event.latlng);
            }
            latitude.value = lat;
            longitude.value = lng;
          });


    </script>

@endsection
