<?php

function curlGet() {
    $url="http://104.199.235.135:31331/index.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_HEADER, true);
    //函数中加入下面这条语句
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    return curl_exec($ch);
}


  ?>