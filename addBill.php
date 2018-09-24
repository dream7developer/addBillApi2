<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	insert();	
	}
function insert(){
	global $connect;
	$stmt = $connect->prepare("INSERT INTO bills(userId,date,amount,image) values(?,?,?,?)");
	$stmt->bind_param("ssd", $userId,$date,$amount,$image);
	$userId=$_POST["userId"];
	$date=$_POST["date"];
	$amount=$_POST["amount"];
	$image=$_POST["image"];
	$stmt->execute() or die("Unable to execute query: " . $stmt->error);
	$response=array();		
	$response["success"]=true;
	echo json_encode($response);
	mysqli_close($connect);
}
?>