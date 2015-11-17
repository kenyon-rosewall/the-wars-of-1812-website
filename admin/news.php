<?
include('../includes/security.php');
?>
<h4>Add news:</h4>
<form name="frmAddNews" action="process.php" method="post">
<table>
	<tr>
		<td>Title</td>
		<td><input type="text" name="title" /></td>
	</tr>
	<tr>
		<td>Content</td>
		<td><textarea cols="50" rows="11" name="content"></textarea></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type='hidden' name='type' value='news' />
			<input type="submit" name="submitButton" value="Add News" />
		</td>
	</tr>
</table>
</form>
<table>
	<tr>
		<td>Title</td>
		<td>Content</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?
	include('../includes/config.php');
	$sql = "SELECT * FROM news ORDER BY dateAdded DESC";
	$result = mysql_query($sql) or die(mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$row['title']."</td>";
		echo "<td>".$row['content']."</td>";
		echo "<td><a href='editnews.php?id=".$row['pk1']."'>edit</a></td>";
		echo "<td><a href='editnews.php?id=".$row['pk1']."&action=delete'>delete</a></td>";
		echo "</tr>";
	}
	include('../includes/closeDb.php');
	?>
</table>