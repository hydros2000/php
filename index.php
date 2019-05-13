<?php 
include('functions.php');
$title = 'Welcome Praktykant';
include('head.php') 
?>
<?php
	if (isset($_POST['attempt'])) {
		$link = connect();
		if (!check_value($_POST, 'username') || !check_value($_POST, 'password')) {
			die('brak danych');
		}
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$query = "SELECT username FROM PhpConnection	WHERE username='$user' AND password='$pass'";

		$result=mysqli_query($link, $query) or die (mysqli_error());

		$total = mysqli_field_count($link);
		if ($total > 0) {
			$_SESSION['username']='root';
			header('Location:dashboard.php');
		}
	}
?>
		 <form method="post" action="index.php">
                <h2>LOGOWANIE</h2>
                <br>
               <label id="okladka1"> Username</label><input type="text" name="username"/><br/>
               <label id="okladka2"> Password</label><input type="password" name="password"><br/>
                <input type="hidden" name="attempt"/>
                <input id="button" type="submit" value="ZALOGUJ"/>
                </form>
    </body>
</html>
