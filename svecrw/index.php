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
				top:120px;
				right:0px;
				width:240px;
				float:right;
				padding:8px;
			}
			#section
			{
				background-color: cyan;
				position:absolute;
				top: 240px;
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
	<body>
		<div id="header">
			<h3>SVEC Research Wing</h3>
		</div>
		<hr>
		<div id="aside">
			<a href="public/login.php"><input type="button" value="Login here"></a>	
			<a href="public/register.php"><input type="button" value="Sign Up"></a>
		</div>
		<div id="section">
		<ul>
			<li><a href="public/tutorials.php">Tutorials</a></li>
			<li><a href="public/profiles.php">Profiles</a></li>
			<li><a href="public/rank.php">Ranking Results</a></li>
			<li><a href="public/rabroad.php">Research@Abroad</a></li>
		</ul>
		</div>
		<br><br><br><br><br><br><br>
		<h2 align="center">Acheivements</h2>
			<table width="60%" border="1px" align = "center">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Designation</th>
				<th>Department</th>
				<th>Acheivement Type</th>
			</tr>
			<?php
				mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysql_select_db("svecrw") or die("Cannot connect to database"); //connect to database
				$query = mysql_query("Select * from achlist Where public='yes'"); // SQL Query
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['id'] . "</td>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['designation'] . "</td>";
						Print '<td align="center">'. $row['dept'] . "</td>";
						Print '<td align="center">'. $row['acheivement'] . "</td>";
					Print "</tr>";
				}
			?>
	</table>
	</body>
</html>