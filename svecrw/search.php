<!DOCTYPE html>
<html>
	<head>
		<title> SVEC Research Wing </title>
		<style>  
			body
			{
				background-image:url("background.jpg");
			}	
			#header
			{
				color:#FFBD33;
				text-align:center;
				padding:5px;
				background-attachment:fixed;
				background-repeat:norepeat;
				font-size:18px;
				font-family:times new roman; 
			}
			ul
			{
				list-style-type: none;
				margin: 0;
				padding: 0;
				width: 200px;
			}
			li a
			{
				display: block;
				color: #000;
				padding: 8px 0 8px 16px;
				text-decoration: none;
				font-size:20px;  
			}
			/* Change the link color on hover */
			li a:hover
			{
				background-color: #555;
				color: white;
			}
			#aside
			{
				position:absolute;
				top:0px;
				right:0px;
				width:240px;
				float:right;
				padding:8px;
			}
			#section
			{
				background-color: cyan;
				position:absolute;
				top: 160px;
				left:30px;
			}
			input[type=button]
			{
				background-color: #4CAF50;
				border: none;
				border-radius:4px 4px 4px 4px; 
				color: white;
				padding: 10px 22px;
				text-decoration: none;
				margin: 4px 2px;
				cursor: pointer;
			}
		</style>
	</head>
	<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:http://localhost/svecrw/index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	?>
	<body>
		<div id="header">
			<h3>SVEC Research Wing</h3>
		</div>
		<hr>
		<div id="aside">
			<p>Hello <?php Print "$user"?>!</p> <!--Displays user's name-->
			<a href="http://localhost/svecrw/user/logout.php"><input type="button" value="Logout"></a>
			<a href="http://localhost/svecrw/ahome.php"><input type="button" value="Return to Home page"></a>
		</div>
		<div id="section">
		<ul>
			<li><a href="http://localhost/svecrw/search/srpublications.php">Search Research Publications</a></li>
			<li><a href="http://localhost/svecrw/search/xpertinfo.php">Search Expert Info</a></li>
			<li><a href="http://localhost/svecrw/search/srprojects.php">Search Research Projects</a></li>
			<li><a href="http://localhost/svecrw/search/sevents.php">Search Events Organized</a></li>
			<li><a href="http://localhost/svecrw/search/sseminars.php">Search List of seminars attended</a></li>
			<li><a href="http://localhost/svecrw/search/sacheivements.php">Search Acheivements</a></li>
			<li><a href="http://localhost/svecrw/search/src.php">Search Review Challenge</a></li>
			<li><a href="http://localhost/svecrw/search/sproposals.php">Search Proposals</a></li>
		</ul>	
		</div>
	</body>
</html>