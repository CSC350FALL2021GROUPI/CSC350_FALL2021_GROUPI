<?php
$ok = true;

if(isset($_REQUEST["userid"]) && isset($_REQUEST["pasword"]))
{
	$userid = $_REQUEST["userid"]; $password = $_REQUEST["pasword"];
	
	include "DBconnect.php";
	
	$sql = "SELECT * FROM 350project.user where UserName='".$userid."' AND Userpassword='".$password."'";
	$result = mysqli($connect, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		$ok = false;
	}
	else
	{
		$sql = "INSERT INTO 350Project.user (UserName, UserPass) VALUES ('".$userid."' , '".$password."')";
		$result = mysqli_query($connect, $sql);
		$connect->close();
		header("Location: signin.php");
	}
}
$inputtype = "SIGN UP";
$handlername = "signup.php";
$inlcude = "log.html";
?>
  