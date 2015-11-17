
<?
$pk1 = "1";
include('../includes/config.php');
	$sql = "SELECT contact FROM main WHERE pk1 = $pk1";
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($result)) {
		$contact = $row['contact'];
	}
include('../includes/closeDb.php');
?>

<fieldset>
	<legend class="titleText">Contact</legend>
	<?php echo $contact ?>
</fieldset>