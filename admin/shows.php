<?
include('../includes/security.php');
?>
<script language="javascript">
$('#calendar').calendar();
</script>


<h4>Add shows:</h4>
<form name="frmAddShows" action="process.php" method="post">
<input type="hidden" name="type" value="shows" />
<table>
	<tr>
		<td>Name of Venue</td>
		<td><input type="text" name="venue" /></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" /></td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="city" /></td>
	</tr>
	<tr>
		<td>State</td>
		<td><input type="text" name="state" /></td>
	</tr>
	<tr>
		<td>Zip</td>
		<td><input type="text" name="zip" /></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="text" id="calendar" size="11" name="performanceDate" /></td>
	<tr>
	<tr>
		<td>Time</td>
		<td>
			<select name="performanceTime">
				<option value="6pm">6pm</option>
				<option value="7pm">7pm</option>
				<option value="8pm">8pm</option>
				<option value="9pm">9pm</option>
				<option value="10pm">10pm</option>
				<option value="11pm">11pm</option>
				<option value="12am">12am</option>
				<option value="1am">1am</option>
				<option value="2am">2am</option>
				<option value="3am">3am</option>
				<option value="4am">4am</option>
				<option value="5am">5am</option>
				<option value="6am">6am</option>
				<option value="7am">7am</option>
				<option value="8am">8am</option>
				<option value="9am">9am</option>
				<option value="10am">10am</option>
				<option value="11am">11am</option>
				<option value="12pm">12pm</option>
				<option value="1pm">1pm</option>
				<option value="2pm">2pm</option>
				<option value="3pm">3pm</option>
				<option value="4pm">4pm</option>
				<option value="5pm">5pm</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Cost</td>
		<td><input type="text" name="cost" /></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea cols="55" rows="15" name="description"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submitButton" value="Add Show" /></td>
	</tr>
</table>
</form>
<table>
	<tr>
		<td>Venue</td>
		<td>Address</td>
		<td>Date/Time</td>
		<td>Cost</td>
		<td>Description</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?
	include('../includes/config.php');
	$sql = "SELECT * FROM shows ORDER BY performanceDate DESC";
	$result = mysql_query($sql) or die(mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$row['venue']."</td>";
		echo "<td>".$row['address']." ".$row['city'].", ".$row['state']." ".$row['zip']."</td>";
		echo "<td>".$row['performanceDate']." @ ".$row['performanceTime']."</td>";
		echo "<td>".$row['cost']."</td>";
		echo "<td>".$row['description']."</td>";
		echo "<td><a href='editshow.php?id=".$row['pk1']."'>edit</a></td>";
		echo "<td><a href='editshow.php?id=".$row['pk1']."&action=delete'>delete</a></td>";
		echo "</tr>";
	}
	include('../includes/closeDb.php');
	?>
</table>