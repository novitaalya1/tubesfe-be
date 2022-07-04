<?php
    $url = "https://y9d9l5wr.directus.app/items/biodata?fields=nama,tgl_lahir,tinggi,berat,kota.nama,agama.nama";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    $hasil = json_decode($response, true);

    callAPI('DELETE', 'https://github.com/novitaalya1/tubesfe-be.git' . $id, false);
?>