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
		<script>
			function attendseminar()
			{
				var id1 = document.getElementById('name');
				if(id1.value=='')
				{
					alert('Please enter expert name');
					return false;
				}
				var id2 = document.getElementById('designation');
				if(id2.value=='')
				{
					alert('Please enter designation');
					return false;
				}
				var id3 = document.getElementById('title');
				if(id3.value=='')
				{
					alert('Please enter the title');
					return false;
				} 
				var id4 = document.getElementById('organizer');
				if(id4.value=='')
				{
					alert('Please enter Organizer name');
					return false;
				}
				var id5 = document.getElementById('date');
				if(id5.value=='')
				{
					alert('Please enter the date');
					return false;
				}
			}
		</script>
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
		<form class="form-horizontal" action="sseminars.php" method="post">
			<!-- Form Name -->
			<center><h2>List of Seminar / Symposia attended by the faculties </h2></center>
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Name of the Faculty</label>  
				<div class="col-md-4">
					<input id="name" name="name" type="text" placeholder="Enter name of the Faculty" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="designation">Designation</label>  
				<div class="col-md-4">
					<input id="designation" name="designation" type="text" placeholder="Enter the Designation" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="organizer">Organized  by</label>  
				<div class="col-md-4">
					<input id="organizer" name="organizer" type="text" placeholder="Enter the name" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
					<button id="submit" name="submit" class="btn btn-success" text-align="center" onclick="return attendseminar();">Submit</button>
				</div>
			</div>
		</form>
		<h2 align="center">Research Publications</h2>
		<table border="1px" width="60%" align ="center">
			<tr>
				<th>Name of Faculty</th>
				<th>Designation</th>
				<th>Title of seminar/workshop/conference</th>
				<th>Organizer</th>
				<th>Date</th>
			</tr>
			<?php
				mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysql_select_db("svecrw") or die("Cannot connect to database"); //connect to database
				if(isset($_POST["submit"]))
				{
					$name = mysql_real_escape_string($_POST['name']);
					$designation = mysql_real_escape_string($_POST['designation']);
					$organizer = mysql_real_escape_string($_POST['organizer']);
					if($name!='')
					{
						if($designation!='')
						{
							if($organizer!='')
							{
								$query = mysql_query("Select * from seminars where name = '$name', designation = '$designation', organizer = '$organizer'"); // SQL Query
								while($row = mysql_fetch_array($query))
								{
									Print "<tr>";
									Print '<td align="center">'. $row['name'] . "</td>";
									Print '<td align="center">'. $row['designation'] . "</td>";
									Print '<td align="center">'. $row['title']. "</td>";
									Print '<td align="center">'. $row['organizer'] . "</td>";
									Print '<td align="center">'. $row['date'] . "</td>";
									Print "</tr>";
								}	
							}
						}
					}
					elseif($name='')
					{
						if($designation!='')
						{
							if($organizer!='')
							{
								$query = mysql_query("Select * from seminars where designation = '$designation', organizer = '$organizer'"); // SQL Query
								while($row = mysql_fetch_array($query))
								{
									Print "<tr>";
									Print '<td align="center">'. $row['name'] . "</td>";
									Print '<td align="center">'. $row['designation'] . "</td>";
									Print '<td align="center">'. $row['title']. "</td>";
									Print '<td align="center">'. $row['organizer'] . "</td>";
									Print '<td align="center">'. $row['date'] . "</td>";
									Print "</tr>";
								}
							}
						}
					}
					elseif($name='')
					{
						if($designation='')
						{
							if($organizer!='')
							{
								$query = mysql_query("Select * from seminars where organizer = '$organizer'"); // SQL Query
								while($row = mysql_fetch_array($query))
								{
									Print "<tr>";
									Print '<td align="center">'. $row['name'] . "</td>";
									Print '<td align="center">'. $row['designation'] . "</td>";
									Print '<td align="center">'. $row['title']. "</td>";
									Print '<td align="center">'. $row['organizer'] . "</td>";
									Print '<td align="center">'. $row['date'] . "</td>";
									Print "</tr>";
								}
							}
						}
					}
					else
					{
						$query = mysql_query("Select * from seminars"); // SQL Query
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
							Print '<td align="center">'. $row['name'] . "</td>";
							Print '<td align="center">'. $row['designation'] . "</td>";
							Print '<td align="center">'. $row['title']. "</td>";
							Print '<td align="center">'. $row['organizer'] . "</td>";
							Print '<td align="center">'. $row['date'] . "</td>";
							Print "</tr>";
						}
					}
				}
				else
				{	
					$query = mysql_query("Select * from seminars"); // SQL Query
					while($row = mysql_fetch_array($query))
					{
						Print "<tr>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['designation'] . "</td>";
						Print '<td align="center">'. $row['title']. "</td>";
						Print '<td align="center">'. $row['organizer'] . "</td>";
						Print '<td align="center">'. $row['date'] . "</td>";
						Print "</tr>";
					}
				}
			?>
		</table>
	</body>
</html>