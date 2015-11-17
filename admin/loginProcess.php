<?
$user = $_POST['iUser'];
$pass = $_POST['iPass'];
$sql = "SELECT password FROM users WHERE user = '$user' LIMIT 1";
include('../includes/config.php');
$result = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_assoc($result)) {
	if ($pass == $row['password']) {
		session_start();
		$_SESSION['loggedIn'] = "true";
		$_SESSION['user'] = $user;
		$_SESSION['r64'] = $pass;
		//$sql = "UPDATE TABLE users SET lastLoggedIn = NOW()";
		//mysql_query($sql) or die(mysql_error());
		//die('logged in true<br />'.print_r($_SESSION));
		header("Location: http://thewarsof1812.com/admin");
	} else {
		$_SESSION['loggedIn'] = "false";
		session_unset();
		if(isset($_COOKIE[session_name()])) {
			setcookie(session_name(),'',time()-42000,'/');
		}
		session_destroy();
	header("Location: http://thewarsof1812.com/admin/login.php");
	}
}
include('../includes/closeDb.php');
?>