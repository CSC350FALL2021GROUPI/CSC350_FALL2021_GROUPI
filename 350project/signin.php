<?php

session_start();
$_SESSION["userid"] = "";
$ok = true;

if(isset($_REQUEST["userid"]) && isset($_REQUEST["pasword"]))
{
	$userid = $_REQUEST["userid"]; $password = $_REQUEST["pasword"];
	
	include "DBconnect.php";
	
	$sql = "SELECT * FROM 350project.user where UserName='".$userid."' AND Userpassword='".$password."'";
	$result = mysqli($connect, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		$connect->close();
		$_SESSION["userid"] = $userid;
		header("Location: keep.php");
	}
	else
	{
		$ok = false;
	}
}
$inputtype = "SIGN IN";
$handlername = "signin.php";
?>

