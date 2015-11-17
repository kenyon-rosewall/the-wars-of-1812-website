<?
session_start();
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$pass = $_SESSION['r64'];
	$sql = "SELECT password FROM users WHERE user = '$user' LIMIT 1";
	include('../includes/config.php');
	$result = mysql_query($sql) or die(mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
		if ($pass == $row['password']) {
			session_start();
			$_SESSION['loggedIn'] = "true";
			$_SESSION['user'] = $user;
			$_SESSION['r64'] = $pass;
		} else {
			die('passwords didn\'t match');
			$_SESSION['loggedIn'] = "false";
			session_unset();
			if(isset($_COOKIE[session_name()])) {
				setcookie(session_name(),'',time()-42000,'/');
			}
			session_destroy();
			header('Location: http://thewarsof1812.com/admin/login.php');
		}
	}
	include('../includes/closeDb.php');
} else {
//die(print_r($_SESSION));
	session_unset();
	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(),'',time()-42000,'/');
	}
	session_destroy();
	header('Location: http://thewarsof1812.com/admin/login.php');
}

?>