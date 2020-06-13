@extends('layouts.app')

@section('content')
<div>@include('inc.navbar')</div>
<!--News Section-->
<section class="section news-index">
    <div class="container">
        <!--News Header-->
        <h2 class="news-header">Daftar Berita</h2>
        <!--News Header END-->

        @if(count($news) > 0)
            @foreach ($news as $item)
            <div class="news-list">
                <a href="/berita/{{$item->id}}">
                    <div class="card card-site2">
                         <div class="col-12">
                                <div class="card-body" style="color: white !important;">
                                    <h3 style="font-weight: bold;">{{$item->title}}</h3>
                                    <hr>
                                    <span><em>{{ $item->created_at->format('d M Y - H:i') }}</em></span>
                                </div>
                            </div>
                    </div>
                </a>
            </div>
            @endforeach
        @else
            <h3 style="color: #367384; ">Tidak Ada Berita :(</h3>
        @endif
    </div>
 </section>
 <!--News Section END-->

@endsection