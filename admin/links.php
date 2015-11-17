<?
include('../includes/security.php');
?>
<?
$pk1 = "1";
include('../includes/config.php');
if(isset($_POST['submitLinks'])) {
	$pk1 = "1";
	$sql = "UPDATE main SET links='".$_POST['contact']."'";
	mysql_query($sql) or die(mysql_error());
	header("Location: index.php");
}


$sql = "SELECT links FROM main WHERE pk1 = $pk1";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_assoc($result)) {
	$links = $row['links'];
}
include('../includes/closeDb.php');

?>
<form action='links.php' method='post' name='linksFrm'>
<table>
	<tr>
		<td>Contact:</td>
		<td><textarea name='contact' style='width:400px;height:500px;'><?php echo $links ?></textarea></td>
	</tr>
	<tr>
		<td colspan='2'><input type='submit' name='submitLinks' value='Update' /></td>
</table>
</form>