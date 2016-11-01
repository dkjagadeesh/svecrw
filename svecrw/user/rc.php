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
		<script>
		function rc()
		{
			var id1 = document.getElementById('name');
			if(id1.value=='')
			{
				alert('Please enter your name');
				return false;
			}	
			var id2 = document.getElementById('designation');
			if(id2.value=='')
			{
				alert('Please enter your designation');
				return false;
			}
			var id3 = document.getElementById('domain');
			if(id3.value=='')
			{
				alert('Please enter your domain');
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
		<form class="form-horizontal" method="post" action="upload.php" enctype="multipart/form-data">
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
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="dept">Department</label>
					<div class="col-md-4">
						<select id="dept" name="dept" class="form-control">
							<option value="it">IT</option>
							<option value="cse">CSE</option>
							<option value="csse">CSSE</option>
						</select>
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
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="wtype">Type of work</label>
					<div class="col-md-4">
						<select id="wtype" name="wtype" class="form-control">
							<option value="journal">Journal</option>
							<option value="conf">Conference</option>
						</select>
					</div>
				</div>
				<!-- Uploads -->
    				Select file to upload:
    				<input type="file" name="fileToUpload" id="fileToUpload">
    				<br>
    			<!-- Submit -->
				<div class="form-group">
					<label class="col-md-4 control-label" for=""></label>
					<div class="col-md-3">
						<button id="submit" name="submit" value = "Upload"class="btn btn-primary" onclick="return rc();">Submit</button>
					</div>
				</div>
			</center>
		</form>
	</body>
</html>