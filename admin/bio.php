<?
include('../includes/security.php');
?>
<?
$pk1 = "1";
include('../includes/config.php');
	$sql = "SELECT bio FROM main WHERE pk1 = $pk1";
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($result)) {
		$bio = $row['bio'];
	}
include('../includes/closeDb.php');
?>
<form action='process.php' method='post' name='bioFrm'>
<table>
	<tr>
		<td>Bio:</td>
		<td><textarea name='bio' style='width:400px;height:500px;'><?php echo $bio ?></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type='hidden' name='type' value='bio' /><input type='submit' name='submitBio' value='Update' /></td>
	</tr>
</table>
</form>