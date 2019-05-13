<?
$con = mysql_connect($host,$dbusername,$dbpassword);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($dbname, $con);;
?>
