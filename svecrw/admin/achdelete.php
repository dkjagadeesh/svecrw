<?php
	session_start(); //starts the session
	if($_SESSION['user']) //checks if user is logged in
	{ 
		$user = $_SESSION['user'];
		if($user == 'admin')
		{

		}
		else
		{
			header("location:http://localhost/svecrw/user/home.php");
		}
	}
	else{
		header("location:http://localhost/svecrw/index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value

	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("svecrw") or die("Cannot connect to database"); //Connect to database
		$id = $_GET['id'];
		mysql_query("DELETE FROM achlist WHERE id='$id'");
		header("location:http://localhost/svecrw/admin/ahome.php"); //redirects back to home
	}
?>