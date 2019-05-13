<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
if(!empty($username)){
if(!empty($password)){
$host="192.168.122.203";
$dbusername="praktykant";
$dbpassword="speednet";
$dbname="Praktykant";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .')'
. mysqli_connect_error());
}
else{
$sql="INSERT INTO PhpConnection (username,password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted succesfully";
}
else{
echo "Error:". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
$con = mysql_connect($host,$dbusername,$dbpassword);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($dbname, $con);
 
$result = mysql_query("SELECT * FROM PhpConnection");
 
echo '<table><tr><th>Username</th><th>Password</th></tr>';
    while($row = mysql_fetch_array($result)) {
             echo "<tr><td>{$row['username']}</td><td>{$row['password']}</td></tr>";
    }
    echo '</table>';
 mysql_close($con);

?>
