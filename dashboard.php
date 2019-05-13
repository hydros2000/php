<?php
session_start();
if($_SESSION['username']=="false")
{
	session_start();
	header('location:index.php');
}
else
{
$_SESSION['username']="false";
}
include('head.php');
include('head2.php');
?>
<br>
<br>
You are logged in!
