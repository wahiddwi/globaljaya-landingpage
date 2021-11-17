@extends('landingpage.layout')
@section('content')
    <div id="home">
        <div class="hero">
            <img src="{{ asset('assets/banner.png') }}" alt="">
            <div class="isi">
                <h1>Best Solution<br>For Your Building</h1>
                <p>Berbekal pengalaman dan sumber daya yangprofesional dan mandiri,<br>kami yakin mampu menjadi solusidalam bidang konstruksi dan pengadaan.</p>
                <a href="#isi" class="btn btn-warning ">Lebih Lanjut</a>
            </div>
        </div>

        <div class="mid"  >
            <img class="bg" src="{{ asset('assets/linear.png') }}" alt="">
            <div class="isi">
                <h1 id="isi">Global Jaya Utama</h1>
                <p>Bergerak di bidang konstruksi serta pengadaan barang dan jasa. Berbekal pengalaman dan sumber daya yang profesional <span> dan mandiri, kami yakin mampu menjadi solusi dalam bidang konstruksi dan pengadaan.</span></p>
            </div>
            <div class="row mx-auto">
                <div class="card-group mx-auto">
                    <div class="card" style="width: 387px; height: 327px;">
                        <img src="{{ asset('assets/mid1.png') }}" class="card-img-top" alt="..." style="width: 105px;">
                        <div class="card-body">
                            <h4 class="card-text">Optimalisasi SDM</h4>
                            <p class="card-text">yang berkualitas untuk memperluas jaringan dan mendapatkanharga terbaik dan kompetitif</p>
                        </div>
                    </div>
                    <div class="card" style="width: 387px; height: 327px;">
                        <img src="{{ asset('assets/mid2.png') }}" class="card-img-top" alt="..." style="width: 105px;">
                        <div class="card-body">
                            <h4 class="card-text">Meningkatkan Hubungan</h4>
                            <p class="card-text">yang lebih baik dengan pelanggan dan menjaga kualitas cara kerja dan hasil kerja</p>
                        </div>
                    </div>
                    <div class="card" style="width: 387px; height: 327px;">
                        <img src="{{ asset('assets/mid3.png') }}" class="card-img-top" alt="..." style="width: 105px;">
                        <div class="card-body">
                            <h4 class="card-text">Joint Operation</h4>
                            <p class="card-text">dengan perusahaan atau organisasi lain untuk kesejahteraan perusahaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sistem">
            <img class="" src="{{ asset('assets/img_sistem.png') }}" alt="">
            <div class="isi">
                <h1>Sistem Manajemen</h1>
                <p>Di dalam setiap proyek CV. Global Jaya Utama senantiasa melibatkan seluruh unsur perusahaan yang terdiri dari SDM yang berkualitas meliputi proses perencanaan, pengorganisasian, pelaksanaan, pengawasan, dan pengevaluasian sistem manajemen serta selalu mengedepankan, memperhatikan Standar Keselamatan (K3) pada setiap proses dan lingkungan kerja.</p>
                <a href="/tentangkami" class="btn btn-warning">Tentang Kami</a>
            </div>
        </div>

        <div class="produk">
            <div>
                <img class="bg" src="{{ asset('assets/linear1.png') }}" alt="">
            </div>
                <div class="isi col-md-6">
                    <h1>Produk dan Layanan</h1>
                    <p>Kami tidak hanya bergerak
                        dalam bidang konstruksi
                        namun juga menyediakan
                        layanan design dan juga
                        pengembangan dari skala
                        kecil, menengah, maupun skala besar.</p>
                        <a href="/layanan" class="btn btn-warning ">Lihat Produk</a>
                </div>
                    <img class="frame" src="{{ asset('assets/img_produk.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection