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
	if($_SESSION['user']) //checks if user is logged in
	{ 
		$user = $_SESSION['user'];
		if($user == 'admin')
		{

		}
		else
		{
			header("location:http://localhost/svecrw/user/home.php");
		}
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
			<li><a href="http://localhost/svecrw/public/tutorials.php">Tutorials</a></li>
			<li><a href="http://localhost/svecrw/user/rpublications.php">Research Publications</a></li>
			<li><a href="http://localhost/svecrw/user/expertinfo.php">Expert Info</a></li>
			<li><a href="http://localhost/svecrw/user/rprojects.php">Research Projects</a></li>
			<li><a href="http://localhost/svecrw/user/events.php">Events Organised</a></li>
			<li><a href="http://localhost/svecrw/user/seminars.php">Seminars/Symposium</a></li>
			<li><a href="http://localhost/svecrw/user/acheivements.php">Achievements</a></li>
			<li><a href="http://localhost/svecrw/user/rc.php">Review Challenge</a></li>
			<li><a href="http://localhost/svecrw/user/proposals.php">Proposals</a></li>
			<li><a href="http://localhost/svecrw/search.php">Search</a></li>
			<li><a href="http://localhost/svecrw/public/rabroad.php">Research@Abroad</a></li>
			<li><a href="http://localhost/svecrw/pending/rcluster.html">Research Cluster</a></li>
		</ul>	
		</div>
		<br><br><br><br><br><br>
		<h2 align="center">Acheivements</h2>
		<table border="1px" width="60%" align ="center">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Designation</th>
				<th>Department</th>
				<th>Acheivement Type</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Public Post</th>
			</tr>
			<?php
				mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysql_select_db("svecrw") or die("Cannot connect to database"); //connect to database
				$query = mysql_query("Select * from achlist"); // SQL Query
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['id'] . "</td>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['designation'] . "</td>";
						Print '<td align="center">'. $row['dept'] . "</td>";
						Print '<td align="center">'. $row['acheivement'] . "</td>";
						Print '<td align="center"><a href="achedit.php?id='. $row['id'] .'">Edit</a> </td>';
						Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">Delete</a> </td>';
						Print '<td align="center">'. $row['public']. "</td>";
					Print "</tr>";
				}
			?>
		</table>
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
				$query = mysql_query("Select * from rc"); // SQL Query
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['dept'] . "</td>";
						Print '<td align="center">'. $row['designation'] . "</td>";
						Print '<td align="center">'. $row['domain'] . "</td>";
						Print '<td align="center">'. $row['wtype'] . "</td>";
						Print '<td align="center"> <a href="/svecrw/'.$row['file'].'" target="blank">'. $row['file'].'</a></td>';
					Print "</tr>";
				}
			?>
		</table>
		<script>
			function myFunction(id)
			{
			var r=confirm("Are you sure you want to delete this record?");
			if (r==true)
			  {
			  	window.location.assign("achdelete.php?id=" + id);
			  }
			}
		</script>
	</body>
</html>