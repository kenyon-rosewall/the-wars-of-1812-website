
<fieldset>
<legend class="titleText">Biographical Information</legend>
<?
include('../includes/config.php');
$sql = "SELECT bio FROM main WHERE pk1 = 1";
$result = mysql_query($sql) or die(mysql_error());
while($row = mysql_fetch_assoc($result)) {
	$bio = $row['bio'];
}
include('../includes/closeDb.php');
echo $bio;
?>
</fieldset>
