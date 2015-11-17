<?
include('../includes/security.php');
?>
<?
if (isset($_GET['action'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM news WHERE pk1 = ".$id;
	include('../includes/config.php');
	$result = mysql_query($sql) or die(mysql_error());
	include('../includes/closeDb.php');
	header("Location:index.php");
}
if (isset($_POST['submitNews'])) {
	$id					= $_POST['id'];
	$venue				= $_POST['title'];
	$address			= $_POST['content'];
	
	include('../includes/config.php');
	$sql = "UPDATE news SET ".
			"title='$title', ".
			"content='$content' ".
			"WHERE pk1 = ".$id;
	$result = mysql_query($sql) or die(mysql_error());
	include('../includes/closeDb.php');
	header('Location: index.php');
} else {
	$id = $_GET['id'];

	include('../includes/config.php');
	$sql = 'SELECT * FROM news WHERE pk1 = '.$id;
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($result)) {
		$title 				= $row['title'];
		$content			= $row['content'];
	}
	include('../includes/closeDb.php');
}
?>
<html>
	<head>
		<title>Edit News</title>
	</head>
<body>
<h3>Edit News</h3>
<form action='' method='post' name='editShowFrm'>
<table>
	<tr>
		<td>Title</td>
		<td><input type='text' name='title' value='<?php echo $title ?>' /></td>
	</tr>
	<tr>
		<td>Content</td>
		<td><textarea style='width:400px;height:150px;' name='content'><?php echo $content ?></textarea></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='hidden' name='id' value='<?php echo $id ?>' />
			<input type='submit' name='submitNews' value='Submit' />
		</td>
	</tr>
</table>
</form>
</body>
</html>