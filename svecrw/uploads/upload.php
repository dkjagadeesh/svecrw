<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if file already exists
    if (file_exists($target_file))
    {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000)
    {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0)
    {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $file = $target_file;
            header("location:home.php");
        }
        else
        {
            echo "Sorry, there was an error uploading your file.";
            header("location:rc.php");
        }
    }
    //to post all the data
    $con = mysql_connect("localhost","root","") or die(mysql_error());
    $db=mysql_select_db("svecrw");
    if($db)
    {
        if(isset($_POST["submit"]))
        {
            $name = $_POST['name'];
            $dept = $_POST['dept'];
            $designation = $_POST['designation'];
            $domain = $_POST['domain'];
            $wtype = $_POST['wtype'];
            $data="insert into rc values ('$name','$dept','$designation','domain','$wtype','$file')";
            if(mysql_query($data,$con))
            {
                echo "<script>alert('Review Challenge Posted!);</script>";
                header("Location:home.php");
            }
            else
            {
                die(mysql_error());
            }   
        }
    }
?>