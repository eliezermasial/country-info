<?php
$data = curl_init($url='https://restcountries.com/v3.1/all');
curl_setopt($data, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($data, CURLOPT_RETURNTRANSFER,true);
$apiResult=curl_exec($data);

if($apiResult=== false){

    var_dump(curl_error($data));
  
  }else{
        $apiResult= json_decode($apiResult,true);
  }
curl_close($data);
?>