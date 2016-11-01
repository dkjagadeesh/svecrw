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
			function expertinfo()
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
				var id3 = document.getElementById('address');
				if(id3.value=='')
				{
					alert('Please enter the address');
					return false;
				} 
				var id4 = document.getElementById('dov');
				if(id4.value=='')
				{
					alert('Please enter the date');
					return false;
				}
				var id5 = document.getElementById('pov');
				if(id5.value=='s')
				{
					alert('Please enter the purpose of visit');
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
		<form class="form-horizontal" action="addexpert.php" method="post">
			<!-- Form Name -->
			<center><h2>Experts Visits</h2></center>
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Name of the Expert</label>  
				<div class="col-md-4">
					<input id="name" name="name" type="text" placeholder="Enter name of the Expert" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="designation">Designation</label>  
				<div class="col-md-4">
					<input id="designation" name="designation" type="text" placeholder="Enter the Designation" class="form-control input-md">
				</div>
			</div>
			<!-- Text Area -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="address">Address</label>
					<div class="col-md-4">                     
						<textarea class="form-control" id="address" name="address"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="dov">Date Of Visit</label>  
					<div class="col-md-4">
						<input id="dov" name="dov" type="text" placeholder="Enter date as DD/MM/YYYY" class="form-control input-md">
					</div>
				</div>
				<!-- Text Area -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="pov">Purpose Of Visit</label>
					<div class="col-md-4">                     
						<textarea class="form-control" id="pov" name="pov"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="submit"></label>
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn btn-success" text-align="center" onclick="return expertinfo();">Submit</button>
					</div>
				</div>
		</form>
	</body>
</html>