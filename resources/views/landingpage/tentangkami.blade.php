@extends('landingpage.layout')
@section('content')
    <div id="home">
        <div class="hero">
            <img src="{{ asset('assets/tentangkami.png') }}" alt="">
            <div class="isit">
                <h1>Tentang Kami</h1>
                <p>Berdiri sejak 06 Desember 2019, merupakan Perusahaan Nasional di Kota Jakarta yang bergerak<br>di bidang konstruksi serta pengadaan barang dan jasa. Berbekal pengalaman<br>dan sumber daya yang profesional dan mandiri, kami yakin mampu menjadi<br>solusi dalam bidang konstruksi dan pengadaan.</p>
            </div>
        </div>
        
            <div class="visi">
                <div>
                    <img class="bg" src="{{ asset('assets/linear.png') }}" alt="">
                </div>
                    <div class="col-md-6">
                        <img class="frame" src="{{ asset('assets/logo1.png') }}" alt="">
                    </div>
                    <div class="isi col-md-6">
                        <h1>Visi</h1>
                        <p>Menjadikan perusahaan konstruksi terbaik di Indonesia dan menjadi mitra terpercaya yang profesional, kompeten dan berintegritas dalam membangun kualitas kerja perusahaan serta berkesinambungan dengan prinsip Good Corporate Governance.</p>
                        <h1>Misi</h1>
                        <p>1. Membangun budaya kerja yang sehat, transparan, akuntabilitas, dan bertanggung jawab<br>2. Menghasilkan produk yang berkualitas dan ergonomis<br>3. Membangun hubungan kerja yang positif, kondusif dan harmonisuntuk mencapai tujuan bersama<br>4. Terus berkomitmen untuk berkembang serta mengikuti danmenerapkan teknologi terkini..</p>
                    </div>   
            </div>
    </div>
@endsection