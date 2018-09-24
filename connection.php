<?php 
$db_name ="farheen";
$mysql_user="root";
$password="";
$server_name="localhost";
$connect=mysqli_connect($server_name,$mysql_user,$password,$db_name);
if(mysqli_connect_errno()){
	echo "connection not established" . mysqli_connect_errno();
}
else{
	//echo "success";
}
?>
