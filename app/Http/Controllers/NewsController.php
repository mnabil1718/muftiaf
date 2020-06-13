<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view('pages.berita')->with('news', $news);    
    }

    public function show($id){
        $news = News::find($id);
        return view('pages.isiberita.isi')->with('news', $news);
    }
}
