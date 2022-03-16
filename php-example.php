//Author: Laim McKenzie
//Version: 1.0
//Date: 07 Sept 2020

<?php
    $json = file_get_contents('https://snwapi.com/api/1.0/?format=json');
    $obj = json_decode($json, true);

    foreach ($obj as $i) {
        echo 'Name: ' . $i['Name'] . '<br>';
        echo 'Version: ' . $i['Version'] . '<br>';
        echo 'Release: ' . $i['Date'] . '<br>';
        echo '<hr>';
    }
?>
