<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<style>
			body
			{
				background-color:Beige ;
				padding-top: 50px;
				padding-right: 30px;
				padding-bottom: 50px;
				padding-left: 80px;
			}
			.button
			{
				background-color: #4CAF50; /* Green */
				border: none;
				color: white;
				padding: 10px 20px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 12px;
				margin: 4px 2px;
				cursor: pointer;
			}
			.forgot
			{
				text-align:left;
			}
		</style>
		<script>
				function validate()
				{
					var username=document.login.username.value;
					var password=document.login.password.value;
					if(username.length==0 || password.length == 0)
					{
						alert("Username or passwordword is empty! Please try again.");
						return false;
					}
				}
		</script>
	</head>
	<body>
		<marquee><h2 style="font-family:algerian;color:blue;">Login to SVEC RESEARCH WING</h2></marquee>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<form class="form-horizontal" action="checklogin.php" onsubmit="return validate()" name="login" method="post">
			<!-- Form Name -->
			<!-- Text input-->
			<center>
				<div class="form-group">
					<label class="col-md-4 control-label" for="username">username</label>  
					<div class="col-md-4">
						<input id="username" name="username" type="text" placeholder="Enter your username" class="form-control input-md"> 
					</div>
				</div>
				<!-- Password input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="password">Password</label>
					<div class="col-md-4">
						<input id="password" name="password" type="password" placeholder="Enter your password" class="form-control input-md">
					</div>
				</div>
				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="submit"></label>
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn btn-primary" type="submit" onclick="return validate();">Login</button>    
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="forgotpassword"></label>  
					<p><a href="C:/xampp/htdocs/svecrw/forgot.html" target="blank">Forgot your password?</a></p>
				</div> 
			</center>
		</form>
	</body>
</html>