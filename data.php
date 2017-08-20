<?php
//whatever the server {echo },it will be the response for client
// echo "hello client";
$myVar=$_POST['myVar'];
//connecting with database
$conn=mysqli_connect("localhost","root","","tasks") or die("error");
//executing the query

$result=mysqli_query($conn,'SELECT * FROM account WHERE account_id ='.$myVar)or die("error") ;
//an array to record data
$data=array();
while($row=mysqli_fetch_assoc($result))
{
	$data[]=$row;
}
//returning the array to client
echo json_encode($data);
?>