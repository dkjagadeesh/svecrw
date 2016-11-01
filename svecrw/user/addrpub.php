<?php 
$con = mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("svecrw");
if($db)
{
	if(isset($_POST["submit"]))
	{
		$name = $_POST['name'];
		$designation = $_POST['designation'];
		$dept = $_POST['dept'];
		$journal_name = $_POST['journal_name'];
		$title = $_POST['title'];
		$paperinfo = $_POST['paperinfo'];
		$year = $_POST['year'];
		$data="insert into rpub (name, designation, dept, journal_name, title, paperinfo, year) values ('$name','$designation','$dept', '$journal_name', '$title','$paperinfo','$year')";
		if(mysql_query($data,$con))
		{
			echo "<script>alert('Successfully  Entered!');</script>";
			header("Location:http://localhost/svecrw/admin/ahome.php");
		}
		else
		{
			die(mysql_error());
		}	
	}			
}
?>