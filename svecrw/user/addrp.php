<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("http://localhost/svecrw/location:index.php");
	}

	if($_SERVER['REQUEST_METHOD'] == "POST") //Added an if to keep the page secured
	{
		$title = mysql_real_escape_string($_POST['title']);
		$pinv = mysql_real_escape_string($_POST['pinv']);
		$status = mysql_real_escape_string($_POST['status']);
		$duration = mysql_real_escape_string($_POST['duration']);
		$budget = mysql_real_escape_string($_POST['budget']);

		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("svecrw") or die("Cannot connect to database"); //Connect to database
		
		mysql_query("INSERT INTO rp (title, pinv, status, duration, budget) VALUES ('$title', '$pinv', '$status', '$duration', '$budget')"); //SQL query
		header("location: http://localhost/svecrw/admin/ahome.php");
	}
	else
	{
		header("location:http://localhost/svecrw/admin/ahome.php"); //redirects back to home
	}
?>