<?
session_unset();
if (isset($_COOKIE[session_name()])) {
	setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>
<script type='text/javascript'>
	window.location = 'http://thewarsof1812.com/admin/login.php';
</script>