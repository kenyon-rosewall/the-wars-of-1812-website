<?
include('../includes/security.php');
?>
<?
if (isset($_GET['action'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM press WHERE pk1 = " . $id;
	include('../includes/config.php');
	$result = mysql_query($sql) or die(mysql_error());
	include('../includes/closeDb.php');
	header("Location: index.php");
}
if (isset($_POST['submitPress'])) {
	$id					= $_POST['id'];
	$venue				= $_POST['link'];
	$address			= $_POST['label'];
	$_POST['strong'] == 't' ? $strong = 't' : $strong = 'f';
	
	include('../includes/config.php');
	$sql = "UPDATE press SET ".
			"link='$link', ".
			"label='$label', ".
			"strong='$strong' ".
			"WHERE pk1 = ".$id;
	$result = mysql_query($sql) or die(mysql_error());
	include('../includes/closeDb.php');
	header('Location: index.php');
} else {
	$id = $_GET['id'];

	include('../includes/config.php');
	$sql = 'SELECT * FROM press WHERE pk1 = '.$id;
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($result)) {
		$link 				= $row['link'];
		$label				= $row['label'];
		$strong				= $row['strong'];
	}
	include('../includes/closeDb.php');
}
?>
<html>
	<head>
		<title>Edit Show</title>
	</head>
<body>
<h3>Edit Show</h3>
<form action='editpress.php' method='post' name='editPresFrm'>
<table>
	<tr>
		<td>Link</td>
		<td><input type='text' name='link' size='50' value='<?php echo $link ?>' /></td>
	</tr>
	<tr>
		<td>Label</td>
		<td><input type='text' name='label' size='100' value='<?php echo $label ?>' /></td>
	</tr>
	<tr>
		<td>Important</td>
		<td><input type='checkbox' name='strong' value='t' <?php echo $strong=='t'?'checked':''; ?> /></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='hidden' name='id' value='<?php echo $id ?>' />
			<input type='submit' name='submitPress' value='Submit' />
		</td>
	</tr>
</table>
</form>
</body>
</html>