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
			function rp()
			{
				var id1 = document.getElementById('title');
				if(id1.value=='')
				{
					alert('Please enter the title of your project proposal');
					return false;
				}
				var id2 = document.getElementById('pinv');
				if(id2.value=='')
				{
					alert('Please enter principal investigators');
					return false;
				}
				var id3 = document.getElementById('status');
				if(id3.value=='')
				{
					alert('Please enter the status of the project');
					return false;
				} 
				var id4 = document.getElementById('duration');
				if(id4.value=='')
				{
					alert('Please enter the duration of project');
					return false;
				}
				var id5 = document.getElementById('budget');
				if(id5.value=='')
				{
					alert('Please enter budget of the project');
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
			<a href="http://localhost/svecrw/ahome.php"><input type="button" value="Return to Home page"></a>
		</div>
		<form class="form-horizontal" action="addrp.php" method="post">
			<!-- Form Name -->
			<center><h2>Research projects undertaken</h2></center>
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="title">Title of Project Proposal</label>  
				<div class="col-md-4">
					<input id="title" name="title" type="text" placeholder="Enter title of Project Proposal" class="form-control input-md">
				</div>
			</div>
			<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="pinv">Principal Investigator(s)</label>
				<div class="col-md-4">                     
					<textarea class="form-control" id="pinv" name="pinv" placeholder="Enter names followed by ','"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="status">Status</label>  
				<div class="col-md-4">
					<input id="status" name="status" type="text" placeholder="Status of the project" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="duration">Duration</label>  
				<div class="col-md-4">
					<input id="duration" name="duration" type="text" placeholder="Enter duration" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="budget">Budget(Rs.)</label>  
				<div class="col-md-4">
					<input id="budget" name="budget" type="text" placeholder="Enter budget" class="form-control input-md">
				</div>
			</div>
			<!-- Button -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
					<button id="submit" name="submit" class="btn btn-success" text-align="center" onclick="return rp();">Submit</button>
				</div>
			</div>
		</form>
	</body>
</html>