@extends('layouts.app')

@section('content')
    <!--Banner Section-->
    <section class="banner-info" role="banner">
        <!--Navbar Include-->
        @include('inc.navbar')
        <!--Navbar Include END-->
        <!-- banner text -->
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-text text-center">
                    <h1>Data & Statistik <br> COVID-19</h1>
                    <!--<p>Menyajikan informasi seputar virus COVID-19 secara global dan nasional. Menggunakan API KawalKorona untuk menyajikan live count data global, nasional, dan provinsi. Sumber berita terbaru tentang virus COVID-19 bersumber dari ayobandung.com</p>
                    <a href="layout/List.html" class="btn btn-large primary-nav" role="navigation">Read More</a>-->
                </div>  
            </div>
        </div>
        <!-- banner text END-->
    </section>
    <!--Banner section END-->


    <!--Live Data Global Section-->
    <section id="global" class="section global">
            <div class="container text-center">
               <h2 id="global-title">Data COVID-19 Global</h2>
            </div>
            <!--Cards-->
            <div class="container">
                <div class="container">
                    <div class="row mx-auto">
                        <div class="col-md-4">
                            <div style="margin-top: 2rem; margin-bottom: 2rem;">
                                <div id="card-positif" class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h4 class="card-title text-white">Positif</h4>
                                                <h3 class="card-subtitle mb-2">{{$data_positif['value']}}</h3>
                                            </div>
                                            <div class="col-md-5">
                                                <i class="card-icon far fa-frown fa-8x" style="opacity: 0.5;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-top: 2rem; margin-bottom: 2rem;">
                                <div id="card-sembuh" class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h4 class="card-title">Sembuh</h4>
                                                <h3 class="card-subtitle mb-2">{{$data_sembuh['value']}}</h3>
                                            </div>
                                            <div class="col-md-5">
                                                <i class="card-icon far fa-smile-beam fa-8x" style="opacity: 0.5;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="margin-top: 2rem; margin-bottom: 2rem;">
                                <div id="card-meninggal" class="card card-meninggal">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h4 class="card-title">Meninggal</h4>
                                                <h3 class="card-subtitle mb-2">{{$data_meninggal['value']}}</h3>
                                            </div>
                                            <div class="col-md-5">
                                                <i class="card-icon far fa-sad-tear fa-8x" style="opacity: 0.5;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Cards END-->
             <!--Tabel Negara-->
            <div class="container table-container-cuy table-responsive ">
                <table class="table table-striped mt-3 mb-0 text-nonwrap">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Meninggal</th>
                        <th scope="col">Sembuh</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($datas as $data)
                        @php
                            $no++;
                        @endphp
                        <tr>
                            <th scope="row">{{$no}}</th>
                            <td>{{$data['attributes']['Country_Region']}}</td>
                            <td>{{$data['attributes']['Confirmed']}}</td>
                            <td>{{$data['attributes']['Deaths']}}</td>
                            <td>{{$data['attributes']['Recovered']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           <!--Tabel Negara END-->
           <br>
           <br>
           <br>
           <!--Embed Data-->
           <div class="container">
               <div class="container mt-3">
                <iframe src="https://ourworldindata.org/grapher/total-deaths-covid-19?tab=map&country=IDN" style="width: 100%; height: 600px; border: 0px none;"></iframe>
               </div>
           </div>
           <!--Embed Data END-->
    </section>
    <!--Live Data Global Section END-->


    <!--Live Data Nasional Section-->
    <section id="nasional" class="section nasional banner-indo">
        <div class="container text-center">
           <h2 id="global-title" style="color: white;">Data COVID-19 Nasional</h2>
        </div>

        <div class="container">
            <div class="container">
                <div class="row mx-auto">
                    <div class="col-md-4">
                        <div style="margin-top: 2rem; margin-bottom: 2rem;">
                            <div id="card-positif" class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h4 class="card-title text-white">Positif</h4>
                                            <h3 class="card-subtitle mb-2">{{ $data_indo[0]['positif'] }}</h3>
                                        </div>
                                        <div class="col-md-5">
                                            <i class="card-icon far fa-frown fa-8x" style="opacity: 0.5;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="margin-top: 2rem; margin-bottom: 2rem;">
                            <div id="card-sembuh" class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h4 class="card-title">Sembuh</h4>
                                            <h3 class="card-subtitle mb-2">{{ $data_indo[0]['sembuh'] }}</h3>
                                        </div>
                                        <div class="col-md-5">
                                            <i class="card-icon far fa-smile-beam fa-8x" style="opacity: 0.5;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="margin-top: 2rem; margin-bottom: 2rem;">
                            <div id="card-meninggal" class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h4 class="card-title">Meninggal</h4>
                                            <h3 class="card-subtitle mb-2">{{ $data_indo[0]['meninggal'] }}</h3>
                                        </div>
                                        <div class="col-md-5">
                                            <i class="card-icon far fa-sad-tear fa-8x" style="opacity: 0.5;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Live Data Nasional Per Provinsi-->
    <section id="provinsi" class="section provinsi">
        <!--Provinsi Heading-->
        <div class="container text-center">
            <h2 id="global-title">Data COVID-19 Per Provinsi</h2>
         </div>
        <!--Provinsi Heading END-->
         <!--Tabel Provinsi-->
         <div class="container table-container-cuy table-responsive ">
            <table class="table table-striped mt-3 mb-0 text-nonwrap">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Meninggal</th>
                    <th scope="col">Sembuh</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp
                    @foreach ($datas_provinsi as $data_provinsi)
                    @php
                        $no++;
                    @endphp
                    <tr>
                        <th scope="row">{{$no}}</th>
                        <td>{{$data_provinsi['attributes']['Provinsi']}}</td>
                        <td>{{ $data_provinsi['attributes']['Kasus_Posi']}}</td>
                        <td>{{ $data_provinsi['attributes']['Kasus_Meni']}}</td>
                        <td>{{ $data_provinsi['attributes']['Kasus_Semb']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       <!--Tabel Provinsi END-->
       <br>
       <br>
       <br>
       <!--Provinsi Heading-->
       <div class="container text-center">
        <h2 id="global-title">Grafik Persebaran Kasus COVID-19 Per Provinsi</h2>
     </div>
    <!--Provinsi Heading END-->
     <!--Chart-->
     <div class="container chart-container">
        {!! $chart->container() !!}
     </div>
     <!--Chart END-->
    </section>
    <!--Live Data Nasional Per Provinsi END-->

<!--Live Data Nasional Section END-->

<!--Chart JS Script-->
{!! $chart->script() !!}
<!--Chart JS Script END-->
@endsection