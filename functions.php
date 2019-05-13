<?php
session_start();
function connect()
{
	$link=mysqli_connect('192.168.122.203','praktykant','speednet', 'Praktykant') or die('Cant connect to database');
	return $link;
}

function query()
{
	$query = "SELECT username FROM PhpConnection    WHERE username='$user' AND password='$pass'";
}

function debug($var) 
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	exit;
}

function check_value($array, $key){
	if(isset($array[$key]) === false){
		return false;
	}
	if(empty($array[$key]))
	{
		return false;
	}
	return true;
}
function query_count($link, $query)
{
mysqli_query($link,$query);
}

function query_fetch_all($link, $query)
{
mysqli_fetch_field($query);
}
