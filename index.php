<?php
$curl=curl_init(); //starting the curl session and storing its instance
//setting the url of the server
curl_setopt($curl, CURLOPT_URL, "http://localhost/api/data.php");
//executing the request and storing server's response in variable
$response=curl_exec($curl);
echo "response is". $response;
?>