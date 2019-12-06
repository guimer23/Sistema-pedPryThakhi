
<?php
$lat="-18.0169247";
$long = "-70.2560016";

$url = "https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyARu7kkxeBLPH6O5E8PwEAcWrw2okeUXmA&latlng=$lat,$long&sensor=false";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);


$curlData = curl_exec($curl);
curl_close($curl);

$address = json_decode($curlData);
print_r($address);
?>