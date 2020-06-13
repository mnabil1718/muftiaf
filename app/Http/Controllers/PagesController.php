<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Charts\CovidChart;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');    
    }

    public function info(){
        $response = Http::get('https://api.kawalcorona.com/');
        $response_positif = Http::get('https://api.kawalcorona.com/positif');
        $response_sembuh = Http::get('https://api.kawalcorona.com/sembuh');
        $response_meninggal = Http::get('https://api.kawalcorona.com/meninggal');
        $response_indo = Http::get('https://api.kawalcorona.com/indonesia');
        $response_provinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        
        $datas = $response->json();
        $data_positif = $response_positif->json();
        $data_sembuh = $response_sembuh->json();
        $data_meninggal = $response_meninggal->json();
        $data_indo = $response_indo->json();
        $datas_provinsi = $response_provinsi->json();
        
        $grafik_provinsi = collect($response_provinsi->json());
        //dd($data_indo);

        
        $labels = $grafik_provinsi->flatten(1)->pluck('Provinsi');
        $Kasus_Posi = $grafik_provinsi->flatten(1)->pluck('Kasus_Posi');
        $Kasus_Semb = $grafik_provinsi->flatten(1)->pluck('Kasus_Semb');
        $Kasus_Meni = $grafik_provinsi->flatten(1)->pluck('Kasus_Meni');

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'bar', $Kasus_Posi)->backgroundColor('#FFA000');
        $chart->dataset('Kasus Sembuh', 'bar', $Kasus_Semb)->backgroundColor('#7986CB');
        $chart->dataset('Kasus Meninggal', 'bar', $Kasus_Meni)->backgroundColor('#EF5350');
        

        return view('pages.info', ['datas' => $datas, 'data_positif' => $data_positif, 'data_sembuh' => $data_sembuh, 'data_meninggal' => $data_meninggal, 'data_indo' => $data_indo, 'datas_provinsi' => $datas_provinsi, 'chart' => $chart]);
    }

    public function fakta(){
        return view('pages.fakta');
    }

}
