<?php
    $url = "https://y9d9l5wr.directus.app/biodata";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    $hasil = json_decode($response, true);

    callAPI('DELETE', $url . $id, false);
?>