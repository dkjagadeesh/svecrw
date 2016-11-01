<?php 
$con = mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("svecrw");
if($db)
{
	if(isset($_POST["submit"]))
	{
		$name = $_POST['name'];
		$designation = $_POST['designation'];
		$address = $_POST['address'];
		$dov = $_POST['dov'];
		$pov = $_POST['pov'];
		$data="insert into expert (name, designation, address, dov, pov) values ('$name','$designation','$address', '$dov', '$pov')";
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