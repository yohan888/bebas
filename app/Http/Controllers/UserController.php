<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home(){
        return view('home');  
    }
    public function tentangkami(){
        return view('tentangkami');  
    }

    public function covid(){
        //MENAMPILKAN SEMUA DATA COVID
        $url = 'http://localhost:8080/aplikasiSatgasCovidServer/webresources/controller/getDataCovid'; //ini linknya
    
        $konten=file_get_contents($url);
        $data=json_decode($konten,true);

        $maxIndex = count($data) - 1;
        $index = 0;
        $avg = 0;
        for ($i = 0; $i < 2; $i++) {
            $avg += $data[$maxIndex]['positif'];
            $maxIndex--;
        }

        $avg = $avg / 2;

        return view('covid', ['data' => $data , 'avg' => $avg]);  

    }

    public function rumahsakit(){
        //MENAMPILKAN SEMUA DATA COVID
        $url = 'http://localhost:8080/aplikasiSatgasCovidServer/webresources/controller/getDataHospital'; //ini linknya
    
        $konten=file_get_contents($url);
        $data=json_decode($konten,true);
        
        return view('rumahsakit', ['data' => $data]);  

    }
    
}
