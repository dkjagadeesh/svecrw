<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<style>
			#aside
			{
				position:absolute;
				top:0px;
				right:0px;
				width:240px;
				float:right;
				padding:8px;
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
		</style>
	</head>
	<body>
		<div id="header">
			<h3>SVEC Research Wing</h3>
		</div>
		<hr>
		<div id="aside">
			<a href="home.php"><input type="button" value="Return to Home page"></a>
		</div>
		<h2 align="center">Profiles</h2>
		<table border="1px" width="60%" align ="center">
			<tr>
				<th>Name</th>
				<th>Designation</th>
				<th>Experience</th>
				<th>Department</th>
				<th>Research Interest Area</th>
				<th>Research Objective</th>
				<th>Paper Presented</th>
				<th>Type Of Paper</th>
				<th>PHD Registration</th>
			</tr>
			<?php
				mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysql_select_db("svecrw") or die("Cannot connect to database"); //connect to database
				$query = mysql_query("Select * from feed"); // SQL Query
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['designation'] . "</td>";
						Print '<td align="center">'. $row['exp'] . "</td>";
						Print '<td align="center">'. $row['dept'] . "</td>";
						Print '<td align="center">'. $row['rinterest'] . "</td>";
						Print '<td align="center">'. $row['robj']. "</td>";
						Print '<td align="center">'. $row['rpresented']. "</td>";
						Print '<td align="center">'. $row['rtype']. "</td>";
						Print '<td align="center">'. $row['phd']. "</td>";
					Print "</tr>";
				}
			?>
		</table>
	</body>
</html>