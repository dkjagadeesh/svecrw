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
			function feed()
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
				var id3 = document.getElementById('journal_name');
				if(id3.value=='')
				{
					alert('Please enter the name of journal');
					return false;
				} 
				var id4 = document.getElementById('title');
				if(id4.value=='')
				{
					alert('Please enter title of paper');
					return false;
				}
				var id5 = document.getElementById('paperinfo');
				if(id5.value=='')
				{
					alert('Please enter volume and page number');
					return false;
				}
				var id6 = document.getElementById('year');
				if(id6.value=='')
				{
					alert('Please enter year of publication');
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
		<form class="form-horizontal" action="addrpub.php" method="post">
			<!-- Form Name -->
			<center><h2>Research Publications</h2></center>
			<!-- Text input-->
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
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="journal_name">Name of the Journal</label>  
				<div class="col-md-4">
					<input id="journal_name" name="journal_name" type="text" placeholder="Enter name of the journal" class="form-control input-md">
				</div>
			</div>
			<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="title">Title of Paper</label>
				<div class="col-md-4">                     
					<textarea class="form-control" id="title" name="title"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="paperinfo">Volume and Page No's</label>  
				<div class="col-md-4">
					<input id="paperinfo" name="paperinfo" type="text" placeholder="Enter volume and page no's" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="year">Year</label>  
				<div class="col-md-4">
					<input id="year" name="year" type="text" placeholder="Enter year of publication" class="form-control input-md">
				</div>
			</div>
			<!-- Button -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
					<button id="submit" name="submit" class="btn btn-success" text-align="center" onclick="return feed();">Submit</button>
				</div>
			</div>
		</form>
	</body>
</html>