@extends('layouts.app')

@section('content')
    <!-- header section -->
    <section class="banner-index" role="banner">
        <!--Navbar Include-->
        @include('inc.navbar')
        <!--Navbar Include END-->
        <!-- banner text -->
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-text text-center">
                    <h4 style="color: white;">Selamat datang di pusat informasi</h4>
                    <h1>COVID-19</h1>
                    <p>Made with <i class="fas fa-heart"></i> by Raden Mufti</p> 
                </div>  
            </div>
        </div>
        <!-- banner text END-->
    </section>
    <!-- header section END--> 
    <!-- News section -->
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-4 text-right">
                <i class="far fa-newspaper fa-6x" style="color: white;"></i>
            </div>
            <div class="col-md-8 text-left">
                <h3 style="font-weight: bold; color: white;">Berita Seputar COVID-19</h3>
                <p class="lead">Dapatkan berita terbaru mengenai perkembangan virus COVID-19</p>
                <a class="btn btn-primary" href="/berita" >Baca Sekarang</a>
            </div>
        </div>
    </section>
    <!-- News section END--> 
    <!-- Statistics section -->
    <section id="services" class="services service-section">
        <div class="container">
            <div class="col-md-8 text-right">
                <h3 style="font-weight: bold; color: black!important;">Data & Statistik</h3>
                <p class="lead">Dapatkan data terbaru perkembangan penyebaran virus COVID-19 secara real-time menggunakan API Kawal Korona</p>
                <a class="btn btn-primary services-btn" href="/statistik">Lihat Data</a>
            </div>
            <div class="col-md-4 text-left">
                <i class="fas fa-chart-line fa-6x icon"></i>
            </div>
        </div>
    </section>
    <!-- Statistics section END--> 
    <!-- Facts section -->
    <section id="facts" class="services service-section">
        <div class="container">
            <div class="col-md-4 text-right">
                <i class="fas fa-shield-virus fa-6x icon" style="color: white;"></i>
            </div>
            <div class="col-md-8 text-left">
                <h3 style="font-weight: bold; color: white!;">Fakta & Tips</h3>
                <p class="lead services-p">Cari tahu fakta mengenai virus COVID-19 dan bagaimana cara melindungi diri dan keluarga tercinta untuk mencegah penyebaran virus</p>
                <a class="btn btn-primary facts-btn" href="/fakta">Pelajari</a>
            </div>
        </div>
    </section>
    <!-- Facts section END-->
    <!-- our team section -->
    <section id="teams" class="section teams">
        <div class="container">
            <div class="container" style="padding-bottom: 3rem;">
                <p class="text-center lead">Temukan lebih banyak berita menarik dan terpercaya mengenai COVID-19 dari situs-situs resmi</p>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 my-2">
                   <div class="link">
                    <a href="https://www.ayobandung.com/" target="blank">
                        <div class="card card-site">
                            <div class="card-body">
                                <h3 style="font-weight: bold;">ayobandung.com</h3>
                            </div>
                        </div>
                    </a>
                   </div>
                </div>
                <div class="col-sm-6 my-2">
                   <div class="link">
                    <a href="https://covid19.go.id/" target="blank">
                        <div class="card card-site">
                            <div class="card-body">
                                <h3 style="font-weight: bold;">covid19.go.id</h3>
                            </div>
                        </div>
                       </a>
                   </div>
                </div>
            </>
        </div>
    </section>
    <!-- our team section END--> 
    <!-- Testimonials section -->
    <section id="testimonials" class="section testimonials no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
            <div class="flexslider">
                <ul class="slides">
                <li>
                    <div class="col-md-12">
                    <blockquote>
                        <h1>"God will not give a trial above the ability of his people" </h1>
                        <p>Hj. Enden N, Quote</p>
                    </blockquote>
                    </div>
                </li>
                <li>
                    <div class="col-md-12">
                    <blockquote>
                        <h1>"Our greatest glory is not never falling, but in rising every time we fall." </h1>
                        <p>Confusius, Quote.</p>
                    </blockquote>
                    </div>
                </li>
                <li>
                    <div class="col-md-12">
                    <blockquote>
                        <h1>"Kenali musuhmu, kenali dirimu. Kau akan memenangkan semua pertarungan." </h1>
                        <p>Sun Tzu, Quote</p>
                    </blockquote>
                    </div>
                </li>
                <li>
                    <div class="col-md-12">
                    <blockquote>
                        <h1>"Tiap tempat akan menjadi sempit bila dimasukkan sesuatu ke dalamnya, kecuali tempat ilmu. Ia akan bertambah luas, jika dimasukkan ilmu ke dalamnya." </h1>
                        <p>Sayyidina Ali ra, Quote</p>
                    </blockquote>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section -->  
@endsection