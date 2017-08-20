<?php
$curl=curl_init(); //starting the curl session and storing its instance
//set the variable u want to send in curl
$var=2;
//setting the url of the server
curl_setopt($curl, CURLOPT_URL, "http://localhost/api/data.php");
//setting the variable in CURL option
curl_setopt($curl, CURLOPT_POSTFIELDS, "myVar=".$var);
//removing 1 from server response
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
//executing the request and storing server's response in variable
$response=curl_exec($curl);
//store the server response,call it data
$data=json_decode($response);
// print_r($data);
//displaying the data all attributes

for($a=0;$a<count($data);$a++)
{
	echo $data[$a]->account_id.",";
	echo $data[$a]->email.",";
	echo $data[$a]->password.",";
	echo "<br/>";
}
?>