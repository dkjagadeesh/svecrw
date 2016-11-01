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
			body
			{
				background-image:url("uy.jpg");
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
			<a href="http://localhost/svecrw/admin/ahome.php"><input type="button" value="Return to Home page"></a>
		</div>
		<form class="form-horizontal" action="sacheivements.php" method="post">
			<center><h2> Achievements</h2></center>
			<!-- Name-->
			<center>
				<div class="form-group">
					<label class="col-md-4 control-label" for="name">Name</label>  
						<div class="col-md-4">
							<input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md">
						</div>
				</div>
				<!-- Designation-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="designation">Designation</label>  
						<div class="col-md-4">
							<input id="designation" name="designation" type="text" placeholder="Enter your designation" class="form-control input-md">
						</div>
				</div>
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="dept">Department</label>
					<div class="col-md-4">
						<select id="dept" name="dept" class="form-control">
							<option value="IT">IT</option>
							<option value="CSE">CSE</option>
							<option value="CSSE">CSSE</option>
						</select>
					</div>
				</div>
				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="submit"></label>
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn btn-success" text-align="center">Submit</button>
					</div>
				</div>
			</center>
		</form>
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
				if(isset($_POST["submit"]))
				{
					$name = mysql_real_escape_string($_POST['name']);
					$designation = mysql_real_escape_string($_POST['designation']);
					$dept = mysql_real_escape_string($_POST['dept']);
					if($name!='')
					{
						if($designation!='')
						{
							if($dept!='')
							{
								$query = mysql_query("Select * from achlist where name = '$name', designation = '$designation', dept = '$dept'"); // SQL Query
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
							}
						}
					}
					elseif($name='')
					{
						if($designation!='')
						{
							if($dept!='')
							{
								$query = mysql_query("Select * from achlist where designation = '$designation', dept = '$dept'"); // SQL Query
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
							}
						}
					}
					elseif($name='')
					{
						if($designation='')
						{
							if($dept!='')
							{
								$query = mysql_query("Select * from achlist where dept = '$dept'"); // SQL Query
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
							}
						}
					}
					else
					{
						$query = mysql_query("Select * from achlist"); // SQL Query
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
					}
				}
				else
				{	
					$query = mysql_query("Select * from achlist"); // SQL Query
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
				}
			?>
	</table>
	</body>
</html>