<?php

use Illuminate\Support\Facades\Http;

function getData()
{

    $url = 'https://api.kawalcorona.com/indonesia/';
    try {
        $response = Http::timeout(100)->get($url);
        $data = $response->json();
        $data['status_code'] = $response->getStatusCode();
        return $data;
    } catch (\Throwable $th) {
        return [
            'status_code' => 500,
            'status' => 'error',
            'message' => 'service user down or unavailable'
        ];
    }
}