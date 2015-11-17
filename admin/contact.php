<?
include('../includes/security.php');
?>
<?
$pk1 = "1";
include('../includes/config.php');
if(isset($_POST['submitContact'])) {
	$pk1 = "1";
	$sql = "UPDATE main SET contact='".$_POST['contact']."'";
	mysql_query($sql) or die(mysql_error());
	header("Location: index.php");
}


$sql = "SELECT contact FROM main WHERE pk1 = $pk1";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_assoc($result)) {
	$contact = $row['contact'];
}
include('../includes/closeDb.php');

?>
<form action='contact.php' method='post' name='contactFrm'>
<table>
	<tr>
		<td>Contact:</td>
		<td><textarea name='contact' style='width:400px;height:500px;'><?php echo $contact ?></textarea></td>
	</tr>
	<tr>
		<td colspan='2'><input type='submit' name='submitContact' value='Update' /></td>
</table>
</form>