@extends('landingpage.layout')
@section('content')
<div class="layanan">
    <div class="herop">
        <img src="{{ asset('assets/produkbg.png') }}" alt="">
        <div class="isi col-md-6">
            <h1>Produk dan Layanan</h1>
            <p>Kami tidak hanya bergerak
                dalam bidang konstruksi
                namun juga menyediakan
                layanan design dan juga
                pengembangan dari skala
                kecil, menengah, maupun
                skala besar.</p>
        </div>
    </div>
    <div class="container">
        <div class="card-group mx-auto">
            <div class="row row-cols-1 row-cols-md-3 mx-auto">

            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/dokter.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Industri Peralatan Kedokteran</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/hospital.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Konstruksi Gedung Kesehatan</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/school.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Konstruksi Gedung Pendidikan</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/hotel.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Konstruksi Gedung Penginapan</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/gym.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Konstruksi Gedung Tempat Hiburan dan Olahraga</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/lain.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Konstruksi Gedung Lainnya</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/fabrikasi.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Pemasangan Bangunan Prafabrikasi Untuk Gedung</h4>
                    </div>
                </div>
            </div>  
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/listrik.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Instalasi Listrik</h4>
                    </div>
                </div>
            </div> 
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/plumbing.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Instalasi Saluran Air (Plumbing)</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/geothermal.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Instalasi Pemanas dan Geothermal</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/kaca.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Perdagangan Besar Kaca</h4>
                    </div>
                </div>
            </div>            
        </div> 
    </div>
</div>
</div>
@endsection