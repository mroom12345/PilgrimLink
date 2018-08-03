<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="pligram_link";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}

$sql="select number from campains ";
$result =$conn -> query($sql);
$array=array();
while($raw=$result->fetch_assoc()){
	array_push($array,$raw);
	
}
echo json_encode($array);


?>