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
				background-image:url("IMG1.jpg");
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
			#aside
			{
				position:absolute;
				top:0px;
				right:0px;
				width:240px;
				float:right;
				padding:8px;
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
		<form class="form-horizontal" method="post" action="src.php">
			<!-- Form Name -->
			<center><h1>Review Challenge</h1></center>
			<!-- Text input-->
			<center>
				<div class="form-group">
					<label class="col-md-4 control-label" for="name">Name</label>  
					<div class="col-md-4">
						<input id="name" name="name" type="text" placeholder="" class="form-control input-md">
    
					</div>
				</div>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="designation">Designation</label>  
					<div class="col-md-4">
						<input id="designation" name="designation" type="text" placeholder="" class="form-control input-md">
    
					</div>
				</div>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="domain">Domain</label>  
					<div class="col-md-4">
						<input id="domain" name="domain" type="text" placeholder="Enter domain the paper belongs to" class="form-control input-md">
					</div>
				</div>
    			<!-- Submit -->
				<div class="form-group">
					<label class="col-md-4 control-label" for=""></label>
					<div class="col-md-3">
						<button id="submit" name="submit" value = "Upload"class="btn btn-primary">Submit</button>
					</div>
				</div>
			</center>
		</form>
		<h2 align="center">Review Challenges</h2>
		<table border="1px" width="60%" align ="center">
			<tr>
				<th>Name</th>
				<th>Department</th>
				<th>Designation</th>
				<th>Domain</th>
				<th>Type of Work</th>
				<th>File</th>
			</tr>
			<?php
				mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysql_select_db("svecrw") or die("Cannot connect to database"); //connect to database
								if(isset($_POST["submit"]))
				{
					$name = mysql_real_escape_string($_POST['name']);
					$designation = mysql_real_escape_string($_POST['designation']);
					$domain = mysql_real_escape_string($_POST['domain']);
					if($name!='')
					{
						if($designation!='')
						{
							if($domain!='')
							{
								$query = mysql_query("Select * from rc where name = '$name', designation = '$designation', domain = '$domain'"); // SQL Query
								while($row = mysql_fetch_array($query))
								{
									Print "<tr>";
									Print '<td align="center">'. $row['name'] . "</td>";
									Print '<td align="center">'. $row['dept'] . "</td>";
									Print '<td align="center">'. $row['designation'] . "</td>";
									Print '<td align="center">'. $row['domain'] . "</td>";
									Print '<td align="center">'. $row['wtype'] . "</td>";
									Print '<td align="center"> <a href="/svecrw/'.$row['file'].'/">'. $row['file'].'</a></td>';
									Print "</tr>";
								}	
							}
						}
					}
					elseif($name='')
					{
						if($designation!='')
						{
							if($domain!='')
							{
								$query = mysql_query("Select * from rc where designation = '$designation', domain = '$domain'"); // SQL Query
								while($row = mysql_fetch_array($query))
								{
									Print "<tr>";
									Print '<td align="center">'. $row['name'] . "</td>";
									Print '<td align="center">'. $row['dept'] . "</td>";
									Print '<td align="center">'. $row['designation'] . "</td>";
									Print '<td align="center">'. $row['domain'] . "</td>";
									Print '<td align="center">'. $row['wtype'] . "</td>";
									Print '<td align="center"> <a href="/svecrw/'.$row['file'].'/">'. $row['file'].'</a></td>';
									Print "</tr>";
								}
							}
						}
					}
					elseif($name='')
					{
						if($designation='')
						{
							if($domain!='')
							{
								$query = mysql_query("Select * from rc where domain = '$domain'"); // SQL Query
								while($row = mysql_fetch_array($query))
								{
									Print "<tr>";
									Print '<td align="center">'. $row['name'] . "</td>";
									Print '<td align="center">'. $row['dept'] . "</td>";
									Print '<td align="center">'. $row['designation'] . "</td>";
									Print '<td align="center">'. $row['domain'] . "</td>";
									Print '<td align="center">'. $row['wtype'] . "</td>";
									Print '<td align="center"> <a href="/svecrw/'.$row['file'].'/">'. $row['file'].'</a></td>';
									Print "</tr>";
								}
							}
						}
					}
					else
					{
						$query = mysql_query("Select * from rc"); // SQL Query
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
							Print '<td align="center">'. $row['name'] . "</td>";
							Print '<td align="center">'. $row['dept'] . "</td>";
							Print '<td align="center">'. $row['designation'] . "</td>";
							Print '<td align="center">'. $row['domain'] . "</td>";
							Print '<td align="center">'. $row['wtype'] . "</td>";
							Print '<td align="center"> <a href="/svecrw/'.$row['file'].'/">'. $row['file'].'</a></td>';
							Print "</tr>";
						}
					}
				}
				else
				{	
					$query = mysql_query("Select * from rc"); // SQL Query
					while($row = mysql_fetch_array($query))
					{
						Print "<tr>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['dept'] . "</td>";
						Print '<td align="center">'. $row['designation'] . "</td>";
						Print '<td align="center">'. $row['domain'] . "</td>";
						Print '<td align="center">'. $row['wtype'] . "</td>";
						Print '<td align="center"> <a href="/svecrw/'.$row['file'].'/">'. $row['file'].'</a></td>';
						Print "</tr>";
					}
				}
			?>
		</table>
	</body>
</html>