<?php

$con = mysql_connect("localhost", "root", "") or die ("Faiiled to connect to mysql" .mysql_error());
$data = mysql_select_db("accounts", $con)or die ("Faiiled to connect to database" .mysql_error());

require('config.php');
if(isset($_POST['submit']))
{
	
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	if($email1 == $email2){
		
		if($pass1 == $pass2){
		
	
			
			
			
			
			$name = mysql_escape_string($_POST['name']);
			$lname = mysql_escape_string($_POST['lname']);
			$uname = mysql_escape_string($_POST['uname']);
			$email1 = mysql_escape_string($email1);
			$email2 = mysql_escape_string($email2);
			$pass1 = mysql_escape_string($pass1);
			$pass2 = mysql_escape_string($pass2);
			
			 
			 
			 
			$query = mysql_query("SELECT * FROM users WHERE uname = '$uname'");
			if(mysql_num_rows($query)> 0){
				echo "Sorry, user already registered...";
				exit();
			}else{
				echo "Registration complete...";
				include('login.php');
			}
			
			$query = mysql_query("INSERT INTO users (id, name, lname, uname, email1, pass1) VALUES (NULL, '$name', '$lname', '$uname', '$email1', '$pass1')") or die (mysql_error());
			
			
			
			
		}else{
			echo "Sorry, your Passwords do not match...";
			exit();
		}
	}else{
			echo "Sorry, your Emails do not match...";
			
	}
}
else
{
	
}

?>