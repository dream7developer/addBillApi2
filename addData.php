<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	insert();	
	}
	function insert(){
		global $connect;
		$stmt = $connect->prepare("INSERT INTO deposit_info(total_money,description,date_add) values(?,?,?)");
		$stmt->bind_param("dss", $total_money, $description, $date_add);
		$total_money=$_POST["total_money"];
		$description=$_POST["description"];
		$date_add=$_POST["date_add"];
		$stmt->execute() or die("Unable to execute query: " . $stmt->error);
		$response=array();		
		$response["success"]=true;
		echo json_encode($response);
		mysqli_close($connect);
}
?>