<?php     
	ob_start();
    include('connection.php');  
    if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	$sql ="select * from signin where email='".$email."' AND password='".$password."'";

	$result=mysqli_query($dbconn,$sql);
	$row=mysqli_fetch_array($result);
	if($row["success"]=="yes")
	{
		header("location:contactform.php");
	}
	else{
		echo "username or password incorrect";
	}
	}
	ob_end_flush();
	?>