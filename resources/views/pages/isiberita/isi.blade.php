@extends('layouts.app')

@section('content')
<div>@include('inc.navbar')</div>
<!--News Section-->
<section class="section news">
    <div class="container">
        <h2 style="font-weight: bold; color: black !important;">{{$news->title}}</h2>
        <span><em>{{ $news->created_at->format('d M Y - H:i') }}</em></span>
        <!--wuiueiwe--><!--<div class="text-center" style="margin: 6rem 0 !important;">
            <img src="{{ asset('images/isi1.jpg') }}" alt="news-image" style="width: 100%; height: auto; margin-bottom: 10px;">
            <br>
            <span><em>{{$news->source}}</em></span>
        </div>-->
        {!! $news->body !!}
        <hr style="border-width: 2px !important;">
        <a href="/berita" style="font-size: 1.6rem;">< Go Back</a>
    </div>
 </section>
 <!--News Section END-->

@endsection