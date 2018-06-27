<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$_SERVER['QUERY_STRING']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = [
   'User-Agent: ExoPlayerDemo/5.2.0 (Linux;Android 6.0.1) ExoPlayerLib/2.3.0'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$jio_output = curl_exec ($ch);
curl_close ($ch);
echo $jio_output;
?>