<?php

// session_start();

// if (isset($_POST['create'])) {
//   if(empty($_POST["nama"]) && empty($_POST["tgl_lahir"]) && empty($_POST["kota"]) && empty($_POST["agama"]) && empty($_POST["tinggi"]) && empty($_POST["berat"]))
//   {
//     echo '<script>alert("ISI SEMUA FORM!")</script>';
//     return false;
//   }
//   else
//   {
    // $nama = $_POST["nama"];
    // $tgl_lahir = $_POST["tgl_lahir"];
    // $kota = $_POST["kota"];
    // $agama = $_POST["agama"];
    // $tinggi = $_POST["tinggi"];
    // $berat = $_POST["berat"];
    $url = "https://y9d9l5wr.directus.app/biodata";
    $data_array = array(
        'nama' => 'Sultan',
        // 'tgl_lahir' => '2002-03-03',
        // 'kota' => 'Bandung',
        // 'agama' => 'Islam',
        'tinggi' => '160',
        'berat' => '40'

    );
    
    // $encode_data = json_encode($data_array);
    $data = http_build_query($data_array);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);

    if($error = curl_error($ch)){
        echo $error;
    }
    else {
        $decoded = json_decode($resp);
        // foreach($decoded as $key => $val){
        //   echo $key . ': '. $val . '<br>';
        // }
      }
    curl_close($ch);
    // }
    // }
// function CallAPI($api_method, $url, $data) {
     
//     $curl = curl_init($url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
//     curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

//     $curl_response = curl_exec($curl);
//     $data = json_decode($curl_response);
//     $kota = $hasil['data'][$x]['kota'];
//     $encode_kota = implode(", ", $kota);
//     $agama = $hasil['data'][$x]['agama'];
//     $encode_agama = implode(", ", $agama);
 
//     /* 
//     * Check for 404 (file not found). 
//     */
//     $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//     // Check the HTTP Status code
//     switch ($httpCode) {
//         case 200:
//             $api_error_status = "200: Success";
//             return ($data);
//             break;
//         case 404:
//             $api_error_status = "404: API Not found";
//             break;
//         case 500:
//             $api_error_status = "500: servers replied with an error.";
//             break;
//         case 502:
//             $api_error_status = "502: servers may be down or being upgraded. Hopefully they'll be OK soon!";
//             break;
//         case 503:
//             $api_error_status = "503: service unavailable. Hopefully they'll be OK soon!";
//             break;
//         default:
//             $api_error_status = "Undocumented error: " . $httpCode . " : " . curl_error($curl);
//             break;
//     }
//     curl_close($curl);
//     echo $api_error_status;
//     die;

//     $api_url = "https://y9d9l5wr.directus.app/biodata/";
//     $api_data = array('nama'=>$_REQUEST['nama'],'tgl_lahir'=>$_REQUEST['tgl_lahir'],'kota'=>$_REQUEST['kota'],'agama'=>$_REQUEST['agama'],'tinggi'=>$_REQUEST['tinggi'],'berat'=>$_REQUEST['berat']);
//     $result = CallAPI('POST', $api_url, $api_data);
//   }

?>