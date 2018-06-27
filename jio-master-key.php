<?php
$token = file_get_contents("https://techbangla.co.in/livetv/test.php");
$cdn = "sbbsrcdnems05"; // sbbsrcdnems05, ssrigcdnems01, sngprcdnems01, smumcdnems01
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://".$cdn.".cdnsrv.jio.com/jiotv.live.cdn.jio.com/".$_GET['channel']."/".$_GET['channel']."_".$_GET['quality'].".m3u8".$token);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = [
   'User-Agent: ExoPlayerDemo/5.2.0 (Linux;Android 6.0.1) ExoPlayerLib/2.3.0'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$jio_output = curl_exec ($ch);
curl_close ($ch);
$output  = str_replace("https://tv.media", "_?https://tv.media", $jio_output);
$output  = str_replace("/".$_GET['channel']."/".$_GET['channel']."_".$_GET['quality'], "Techbangla", $output);
$output  = str_replace($_GET['channel'], "http://".$cdn.".cdnsrv.jio.com/jiotv.live.cdn.jio.com/".$_GET['channel']."/".$_GET['channel'], $output);
$output  = str_replace("Techbangla", "/".$_GET['channel']."/".$_GET['channel']."_".$_GET['quality'], $output);
echo $output;
?>