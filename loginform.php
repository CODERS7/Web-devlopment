<?php
error_reporting(0);
$con = mysql_connect("localhost", "root", "") or die(mysql_error());
$data = mysql_select_db("register", $con) or die(mysql_error());

if(isset($_GET['submit'])){
	$username = $_GET['username'];
	$password = $_GET['password'];
	
	
	$query = mysql_query("SELECT * FROM accountform WHERE username = '$username' AND password = '$password'");
	
	
	if(mysql_num_rows($query) > 0){
		echo "Successfully Login...";
	
		require('logout.php');
		
	
	}
	else{
		echo "Invalid login details, Please try again later...";	
	}
}


?>



