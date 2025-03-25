<?php

if($_POST["search"]){
    $search_name =  $_POST["search"];
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"https://www.omdbapi.com/?i=tt3896198&apikey=1bd997ce&s=".$search_name);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 
            http_build_query(array('postvar1' => 'value1')));

    // Receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);

    curl_close($ch);
    echo $server_output;
    
}