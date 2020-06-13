@extends('layouts.app')

@section('content')
     <!-- header section -->
     <section class="banner-fakta" role="banner">
        <!--Navbar Include-->
        @include('inc.navbar')
        <!--Navbar Include END-->
        <!-- banner text -->
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-text text-center">
                    <h1>FAKTA CORONA</h1>
                </div>  
            </div>
        </div>
        <!-- banner text END-->
    </section>
    <!-- header section END--> 
    
    <!--Facts Section-->
    <section class="section fakta">
       <div class="container">
        <!--Facts Heading-->
        <div class="container text-center">
            <h2 id="global-title">5 Fakta COVID-19</h2>
        </div>
        <!--Facts Heading END-->
        <!--Fact #1-->
        <div class="jumbotron" style="box-shadow: 0px 5px 5px #e5e5e5;">
            <div class="container">
                <h4 class="display-5"><b>#1</b> Penyakit ini bisa sangat menular sejak awal infeksi, berpotensi menularkan bahkan sebelum mereka bergejala.</h4>
                <hr class="my-4">
                <p class="text-justify">Sebuah studi yang dilakukan di Jerman menemukan bahwa 9 orang yang terinfeksi virus corona bisa mengeluarkan banyak virus, dari ribuan hingga jutaan, meski masih dalam tahap awal infeksi. Saat itu mereka baru memiliki gejala ringan seperti menggigil kedinginan.</p>
            </div>
        </div>
        <!--Fact #2-->
        <div class="jumbotron text-right" style="box-shadow: 0px 5px 5px #e5e5e5;">
            <div class="container">
                <h4 class="display-5"><b>#2</b> Butuh waktu 14 hari dari gejala sampai infeksi</h4>
                <hr class="my-4">
                <p class="text-justify">Penelitian yang dimuat dalam Annals of Internal Medicine menunjukkan bahwa rerata masa inkubasi adalah lima hari. Hal ini berarti ada orang yang akan muncul gejala langsung dan ada juga yang belakangan. Penelitian tersebut juga melaporkan bahwa 2,5 persen orang menunjukkan gejala 2 hari setelah terpapar dan 97,5 persen lainnya menunjukkan gejala setelah 11 hari dan Anda harus menjalani karantina 14 hari.</p>
            </div>
           
        </div>
        <!--Fact #3-->
        <div class="jumbotron" style="box-shadow: 0px 5px 5px #e5e5e5;">
            <div class="container">
                <h4 class="display-5"><b>#3</b> Virus bisa hidup di permukaan sampai tiga hari</h4>
                <hr class="my-4">
                <p class="text-justify">Dalam penelitian, peneliti menciptakan aerosol (gas) yang mengandung virus untuk meniru bagaimana virus itu menyebar melalui bersin, batuk, atau napas.
                Mereka juga menyemprotkan gas atau spray aerosol tersebut ke permukaan yang berbeda untuk mendeteksi seberapa lama virus bisa hidup di ermukaan. Jawabannya beragam, ada yang sampai 24 jam sampai tiga hari seperti pada besi.</p>
            </div>
            
        </div>
        <!--Fact #4-->
        <div class="jumbotron text-right" style="box-shadow: 0px 5px 5px #e5e5e5;">
            <div class="container">
                <h4 class="display-5"><b>#4</b> Jumlah orang yang terinfeksi meningkat dengan cepat</h4>
                <hr class="my-4">
                <p class="text-justify">WHO memperkirakan tingkat infeksi virus corona ini berkisar antara 2-2,5. Artinya satu orang yang sakit akan menginfeksi 2-3 orang lainnya. Dengan kecepatan tersebut, orang yang terinfeksi tersebut akan naik dua kali lipat setiap enam hari.</p> 
            </div>
            
        </div>
        <!--Fact #5-->
        <div class="jumbotron" style="box-shadow: 0px 5px 5px #e5e5e5;">
            <div class="container">
                <h4 class="display-5"><b>#5</b> Yang sakit serius bukan hanya orang tua</h4>
                <hr class="my-4">
                <p class="text-justify">Banyak orang mungkin meremehkan penyakit ini karena dianggap hanya berbahaya untuk orang di atas usia 60 tahun. Namun berdasar laporan dari CDC, di Amerika Serikat, ada 38 persen orang yang dirawat di rumah sakit ternyata masih berusia 20-54 tahun. Sedangkan 12 persen dari ruang ICU ditempati oleh orang dari usia 20-44 tahun.</p>
            </div>
        </div>

        <span>Sumber: <a href="https://www.cnnindonesia.com/gaya-hidup/20200330121154-255-488203/5-fakta-covid-19-yang-bisa-dibagikan-ke-mereka-yang-bandel" target="_blank">https://www.cnnindonesia.com/gaya-hidup/20200330121154-255-488203/5-fakta-covid-19-yang-bisa-dibagikan-ke-mereka-yang-bandel</a></span>
       </div>
    </section>
    <!--Facts Section END-->

    <!--Tips Section-->
    <section id="tips" class="section intro" style="background-color: #00AEDA !important;">
        <div class="container">
            <!--Tips Heading-->
            <div class="container text-center">
                <h2 id="global-title" style="color: white">Tips Menghindari COVID-19</h2>
            </div>
            <!--Tips Heading END-->
            <!--Tips&Trick-->
            <div class="container">
                <div class="row" style="margin-bottom: 2rem;">
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/masker-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Gunakan masker jika keluar rumah</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/travel-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Hindari bepergian jika tak perlu</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 2rem;">
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/pray-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Berdoa & beribadah di rumah</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/distance-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Jaga jarak minimal 1 m</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 2rem;">
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/hand-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Mencuci tangan pakai sabun</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/crowd-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Hindari berkerumun</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 2rem;">
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/eat-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Makan yang bergizi dan berimbang</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" style="background-color: white!important; box-shadow: 0px 3px 5px #0098bf; height: 27rem;">
                            <div class="row">
                                <div class="col-sm-5"> 
                                    <img class="card-img rounded-circle" src="{{ asset('images/run-icon.png') }}" alt="Card image cap" style="width: 200px; height: auto; margin-right: auto;">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-text my-auto" style="color: #343a40; font-weight: bold;">Olahraga rutin & cukup istirahat</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Tips&Trick END-->
        </div>
    </section>
    <!--Tips Section END-->
@endsection