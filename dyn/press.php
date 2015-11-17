<fieldset>
	<legend class="titleText">Press</legend>
	<?
	include('../includes/config.php');
	$sql = "SELECT * FROM press ORDER BY pk1 DESC";
	$result = mysql_query($sql) or die(mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
		if ($row['strong']=='t') {
			$opening = '<span style="font-style:italic;font-weight:bold;">';
			$closing = '</span>';
		} else {
			$opening = '';
			$closing = '';
		}
		echo $opening.'<a target="_blank" href="'.$row['link'].'">'.$row['label'].'</a>'.$closing.'<br />';
	}
	include('../includes/closeDb.php');
	?>
</fieldset>