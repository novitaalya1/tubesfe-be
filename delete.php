<?php
if (isset($_POST['delete'])){
    $id = $_POST['id'];
    $url = "https://y9d9l5wr.directus.app/items/biodata/.$id.";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $result;

    echo "<script>document.location.href='index.php';</script>";
}
?>