<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("http://localhost/svecrw/location:index.php");
	}

	if($_SERVER['REQUEST_METHOD'] == "POST") //Added an if to keep the page secured
	{
		$name = mysql_real_escape_string($_POST['name']);
		$designation = mysql_real_escape_string($_POST['designation']);
		$title = mysql_real_escape_string($_POST['title']);
		$organizer = mysql_real_escape_string($_POST['organizer']);
		$date = mysql_real_escape_string($_POST['date']);

		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("svecrw") or die("Cannot connect to database"); //Connect to database
		
		mysql_query("INSERT INTO seminars (name, designation, title, organizer, date) VALUES ('$name', '$designation', '$title', '$organizer', '$date')"); //SQL query
		header("location: http://localhost/svecrw/admin/ahome.php");
	}
	else
	{
		header("location:http://localhost/svecrw/admin/ahome.php"); //redirects back to home
	}
?>