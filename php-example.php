<?php

    // Author: Laim McKenzie
    // API Version: 0.1b
    
    $json = file_get_contents('http://api-url/api/?type=json');
    $obj = json_decode($json);
    print($obj[0]->Name . " - " . $obj[0]->Latest . " - " . $obj[0]->Release);
?>
