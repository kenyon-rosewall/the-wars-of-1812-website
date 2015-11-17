<?
include('../includes/security.php');


?>
<h4>Add press:</h4>
<form name="pressFrm" action="process.php" method="POST">
	<table>
		<tr>
			<td>Link: </td>
			<td><input type="text" name="link" size="50" /></td>
		</tr>
		<tr>
			<td>Label: </td>
			<td><input type="text" name="label" size="100" /></td>
		</tr>
		<tr>
			<td>Important</td>
			<td><input type="checkbox" name="strong" value='t' /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="hidden" name="type" value="press" />
				<input type="submit" name="sbmt" value="Add Press Item" />
			</td>
		</tr>
	</table>
</form>
<table>
	<tr>
		<td>No. </td>
		<td width="200">Link</td>
		<td>Label</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?
	include('../includes/config.php');
	$sql = "SELECT * FROM press ORDER BY pk1 DESC";
	$result = mysql_query($sql) or die(mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$row['pk1']."</td>";
		if (strlen($row['link']) > 50) {
			echo "<td>".substr($row['link'],0,47)."...</td>";
		} else {
			echo "<td>".$row['link']."</td>";
		}
		if (strlen($row['label']) > 44) {
			echo "<td>".substr($row['label'],0,42)."...</td>";
		} else {
			echo "<td>".$row['label']."</td>";
		}
		echo "<td><a href='editpress.php?id=".$row['pk1']."'>edit</a></td>";
		echo "<td><a href='editpress.php?id=".$row['pk1']."&action=delete'>delete</a></td>";
		echo "</tr>";
	}
	include('../includes/closeDb.php');
	?>
</table>