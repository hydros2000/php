<?php
	$username=filter_input(INPUT_POST,'username');
	$password=filter_input(INPUT_POST,'password');

	#$username=stripcslashes($username);
	#$password=stripcslashes($password);
	#$username=mysql_real_escape_string($username);
	#$password=mysql_real_escape_string($password);
	
	$host="192.168.122.203";
	$dbusername="praktykant";
	$dbpassword="speednet";
	$dbname="Praktykant";
	
	$con = mysql_connect($host,$dbusername,$dbpassword);
	mysql_select_db($dbname, $con);
	
	$result=mysql_query("select * from PhpConnection where username='$username' and password='$password'")
		or die("Failed to query database".mysql_error());
	$row=mysql_fetch_array($result);
	if($row['username']==$username && $row['password'] ==$password){
	echo "Login success! Welcome ".$row['username'];
	}else{
		echo "Failed to login!";
	}

?>
