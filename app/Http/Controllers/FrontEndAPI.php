<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndAPI extends Controller
{
    public function home()
    {
        $data = getData();
        //echo $data[0]['positif'];
        //echo 'welcome';
        return view('index', [
            'positif' => $data[0]['positif'],
            'sembuh' => $data[0]['sembuh'],
            'meninggal' => $data[0]['meninggal']
        ]);
    }

    public function kebijakanPrivasi()
    {
        return view('kebijakan_privasi');
    }

    public function faq()
    {
        return view('faq');
    }


}
