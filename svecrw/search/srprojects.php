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
			<a href="http://localhost/svecrw/ahome.php"><input type="button" value="Return to Home page"></a>
		</div>
		<form class="form-horizontal" action="srprojects.php" method="post">
			<!-- Form Name -->
			<center><h2>Research projects undertaken</h2></center>
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="title">Title of Project Proposal</label>  
				<div class="col-md-4">
					<input id="title" name="title" type="text" placeholder="Enter title of Project Proposal" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="status">Status</label>  
				<div class="col-md-4">
					<input id="status" name="status" type="text" placeholder="Status of the project" class="form-control input-md">
				</div>
			</div>
			<!-- Button -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
					<button id="submit" name="submit" class="btn btn-success" text-align="center">Submit</button>
				</div>
			</div>
		</form>
		<h2 align="center">Research Projects</h2>
		<table border="1px" width="60%" align ="center">
			<tr>
				<th>Title of project proposal</th>
				<th>Principal Investigator(s)</th>
				<th>Status</th>
				<th>Duration</th>
				<th>Budget</th>
			</tr>
			<?php
				mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysql_select_db("svecrw") or die("Cannot connect to database"); //connect to database
				if(isset($_POST["submit"]))
				{
					$title = mysql_real_escape_string($_POST['title']);
					$status = mysql_real_escape_string($_POST['status']);
					if($title!='')
					{
						if($status='')
						{
							$query = mysql_query("Select * from rp where title = '$title'"); // SQL Query
							while($row = mysql_fetch_array($query))
							{
								Print "<tr>";
								Print '<td align="center">'. $row['title'] . "</td>";
								Print '<td align="center">'. $row['pinv'] . "</td>";
								Print '<td align="center">'. $row['status'] . "</td>";
								Print '<td align="center">'. $row['duration'] . "</td>";
								Print '<td align="center">'. $row['budget']. "</td>";
								Print "</tr>";
							}
						}
					}
					elseif($title='')
					{
						if($status!='')
						{
							$query = mysql_query("Select * from rp where status = '$status'"); // SQL Query
							while($row = mysql_fetch_array($query))
							{
								Print "<tr>";
								Print '<td align="center">'. $row['title'] . "</td>";
								Print '<td align="center">'. $row['pinv'] . "</td>";
								Print '<td align="center">'. $row['status'] . "</td>";
								Print '<td align="center">'. $row['duration'] . "</td>";
								Print '<td align="center">'. $row['budget']. "</td>";
								Print "</tr>";
							}
						}
					}
					else
					{
						$query = mysql_query("Select * from rp"); // SQL Query
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
							Print '<td align="center">'. $row['title'] . "</td>";
							Print '<td align="center">'. $row['pinv'] . "</td>";
							Print '<td align="center">'. $row['status'] . "</td>";
							Print '<td align="center">'. $row['duration'] . "</td>";
							Print '<td align="center">'. $row['budget']. "</td>";
							Print "</tr>";
						}
					}
				}
				else
				{	
					$query = mysql_query("Select * from rp"); // SQL Query
					while($row = mysql_fetch_array($query))
					{
						Print "<tr>";
						Print '<td align="center">'. $row['title'] . "</td>";
						Print '<td align="center">'. $row['pinv'] . "</td>";
						Print '<td align="center">'. $row['status'] . "</td>";
						Print '<td align="center">'. $row['duration'] . "</td>";
						Print '<td align="center">'. $row['budget']. "</td>";
						Print "</tr>";
					}
				}
			?>
		</table>
	</body>
</html>
