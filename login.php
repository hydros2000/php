<?php include("config.php"); ?>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$password = addslashes($password);
$username = addslashes($username);
$username = htmlspecialchars($username);

if ($_GET['username'] != '') { //jezeli ktos przez adres probuje kombinowac
exit;
}
if ($_GET['password'] != '') { //jezeli ktos przez adres probuje kombinowac
exit;
}

$password = md5($password); //szyfrowanie hasla
    if (!$username OR empty($username)) {
include("head2.php");
echo '<p class="alert">Wypełnij pole z loginem!</p>';
include("foot.php");
exit;
}
    if (!$password OR empty($password)) {
include("head2.php");
echo '<p class="alert">Wypełnij pole z hasłem!</p>';
include("foot.php");
exit;
}
$istnick = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `PhpConnection` WHERE `username` = '$username' AND `password` = '$password'")); // sprawdzenie czy istnieje uzytkownik o takim nicku i hasle
    if ($istnick[0] == 0) {
echo 'Logowanie nieudane. Sprawdź pisownię nicku oraz hasła.';
    } else {

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

header("Location: indeks.php");
}
?>
