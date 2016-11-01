<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
    $bool = true;
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("svecrw") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from users"); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("http://localhost/svecrw/user/register.php");</script>'; // redirects to register.php
		}
	}

	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("http://localhost/svecrw/index.php");</script>'; // redirects to register.php
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Signup for SVEC Research Wing</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style>
		#header 
		{
    		width:99%;float:left;
    		text-align:center;
    		padding:5px;
		}
		.w3-tangerine
		{
			font-family: "Allerta Stencil", Sans-serif;
		}
		.w3-tangerine1
		{
			font-family: "Tangerine", serif;
		}
		.blink
		{
    		animation: 1.2s linear 0s normal none infinite running blink;
    		font-size: 25px !important;line-height: 35px;
		}
		#space20
		{
			height:30px;
		}
		.form-horizontal .form-group {margin-right:0px;}
	</style>
	<script>
		function check_values()
		{
			var re1 = /^[0-9]{10}$/;
			var id1 = document.getElementById('username');
			name1=id1.value;
			if(id1.value=='' || name1.length<3 )
			{
				alert('Username should be more than 3 characters');
				return false;
			}	
			var id2 = document.getElementById('password');
			password=id2.value;
			var id3 = document.getElementById('rpass');	
			if(id2.value=='' ||password.length < 4 )
			{
				alert('Password should be more than 4 characters');
				return false;
			}	
			if(id2.value!=id3.value)
			{
				alert('Passwords do not match');
				return false;
			}		
		}
	</script>
</head>
<body>
	<div id="header">
		<img src="logo.jpg" width="164" height="93" align="left">	
		<div class="w3-container w3-tangerine">
		<div class="w3-xxxlarge" style="font-size:49px;" align="center">SVEC Research Wing</div>
	</div>
	
	<div id="space20"></div>
	<div id="space20"></div>
	<div id="space20"></div>

	<form class="form-horizontal" method="post" action="register.php">
	<!-- Text input-->
	<div id="space20"></div>
	<div id="space20"></div>
	<div id="space20"></div>
	<div class="form-group">
 		<label class="col-md-4 control-label" for="username">Username</label>  
		<div class="col-md-4">
  			<input id="username" name="username" type="text" placeholder="Enter more than 3 characters" class="form-control input-md">
    	</div>
	</div>
	<!-- Password input-->
	<div class="form-group">
  		<label class="col-md-4 control-label" for="passwordinput">Password </label>
 		<div class="col-md-4">
    		<input id="password" name="password" type="password" placeholder="Enter more than 4 characters" class="form-control input-md">
    
		</div>
	</div>
	<!-- Password input-->
	<div class="form-group">
  		<label class="col-md-4 control-label" for="rpass">Reenter password</label>
  		<div class="col-md-4">
    		<input id="rpass" name="rpass" type="password" placeholder="Reenter your password" class="form-control input-md">   
 		</div>
	</div>
	<!-- Button -->
	<div class="form-group">
  		<label class="col-md-4 control-label" for=""></label>
  		<div class="col-md-4">
  			<button id="submit" name="submit" class="btn btn-primary" type="submit" onclick="return check_values();">Register</button>
  		</div>
	</div>
</body>
</html>