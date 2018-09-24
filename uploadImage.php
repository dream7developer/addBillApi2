<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	insert();	
	}
function insert(){
	global $connect;
	$stmt = $connect->prepare("INSERT INTO images(image) values(?)");
	$stmt->bind_param("s", $image);
	$image=$_POST["image"];
	$stmt->execute() or die("Unable to execute query: " . $stmt->error);
	$response=array();		
	$response["success"]=true;
	echo json_encode($response);
	mysqli_close($connect);
}
?>