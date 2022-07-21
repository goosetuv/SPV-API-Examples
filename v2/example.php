<?php
    // This will show the latest version of Snow License Manager 9 and Snow Inventory Server 6
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://snwapi.com/api/v2/version',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'api_key: 7b694774bafdd0de5942fa3aee67a7b1',
        'api_format: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    $obj = json_decode($response, true);
?>

<pre> 
[
    {
        "Name": "<?php print($obj['Snow License Manager 9']['Name']);?>",
        "Version": "<?php print($obj['Snow License Manager 9']['Version']);?>",
        "Date": "<?php print($obj['Snow License Manager 9']['Date']);?>"
    }
]
</pre>
<pre> 
[
    {
        "Name": "<?php print($obj['Snow Inventory Server 6']['Name']);?>",
        "Version": "<?php print($obj['Snow Inventory Server 6']['Version']);?>",
        "Date": "<?php print($obj['Snow Inventory Server 6']['Date']);?>"
    }
]
</pre>
                    
