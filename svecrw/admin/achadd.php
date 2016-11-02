<?php
	session_start();
	if($_SESSION['user']){
	}
	else{
		header("location:http://localhost/svecrw/index.php");
	}

	if($_SERVER['REQUEST_METHOD'] == "POST") //Added an if to keep the page secured
	{
		$name = mysql_real_escape_string($_POST['name']);
		$designation = mysql_real_escape_string($_POST['designation']);
		$dept = mysql_real_escape_string($_POST['dept']);
		$acheivement = mysql_real_escape_string($_POST['acheivement']);
		$decision ="no";

		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("svecrw") or die("Cannot connect to database"); //Connect to database
		foreach($_POST['public'] as $each_check) //gets the data from the checkbox
 		{
 			if($each_check !=null ){ //checks if the checkbox is checked
 				$decision = "yes"; //sets teh value
 			}
 		}
		
		mysql_query("INSERT INTO achlist (name, designation, dept, acheivement, public) VALUES ('$name', '$designation', '$dept', '$acheivement', '$decision')"); //SQL query
		header("location: http://localhost/svecrw/admin/ahome.php");
	}
	else
	{
		header("location:http://localhost/svecrw/admin/ahome.php"); //redirects back to hom
	}
?>