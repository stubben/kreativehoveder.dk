<?php
$data_url = "https://raw.githubusercontent.com/stubben/kreativehoveder.dk/master/data/kompetencer-data.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $data_url);
curl_setopt($ch, CURLOPT_FILETIME, true);
$data = curl_exec($ch);
curl_close($ch);
if (!empty($data)) {
    $fh = fopen("data/kompetencer-data.json", 'w');
    fwrite($fh, $data);
    fclose($fh);
    header("Location: ./");    
}
