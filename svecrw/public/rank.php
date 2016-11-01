<!DOCTYPE html>
<html>
	<head>
		<style>
			body
			{
				background-image:url("IMG1.jpg");
			}	
			#header{
				background-color:black;
				color:white;
				text-align:center;
				padding:5px;
			}
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				width: 200px;
				background-color:#f1f1f1;
	
			}
			li a {
				display: block;
				color: #000;
				padding: 8px 0 8px 16px;
				text-decoration: none;
			}

			/* Change the link color on hover */
			li a:hover {
				background-color: #555;
				color: white;
			}
			#section{
				width:350px;
				float:left;
				padding:10px;
			}

			#aside{
				width:350px;
				float:right;
				padding:10px;
			}
			select {
				width: 50%;
				padding: 16px 20px;
				border: none;
				border-radius: 4px;
				background-color: #f1f1f1;
			}
			input[type=button]{
				background-color: #4CAF50;
				border: none;
				color: white;
				padding: 16px 32px;
				text-decoration: none;
				margin: 4px 2px;
				cursor: pointer;
			}
			div.fixed {
				position: fixed;
				bottom: 0;
				right: 0;
			}
		</style>
	</head>
	<body>
		<div id="header">
			<h2>WELCOME TO ASSESMENT</h2>
		</div>
		<br><br>
		<center>
			<b>INSTITUTION</b>
			<form>
				<select id="country" name="country">
					<option value="SELECT">SELECT COLLEGE</option>
					<option value="SVEC">SREE VIDYANIKETHAN ENGINEERING COLLEGE</option>
					<option value=""></option>
					<option value=""></option>
				</select>
			</form>
			<b>DEPARTMENT</b>
			<form>
				<select id="country" name="country">
					<option value="select">SELECT DEPARTMENT</option>
					<option value="IT">IT</option>
					<option value="CSE">CSE</option>
					<option value="CSSE">CSSE</option>
				</select>
			</form>
			<input type="button" value="VIEW">
			<input type="button" value="RANK">
		</center>
	</body>
</html>