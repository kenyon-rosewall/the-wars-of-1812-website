<?
include('../includes/security.php');
?>
<?
if (isset($_GET['action'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM shows WHERE pk1 = " . $id;
	include('../includes/config.php');
	$result = mysql_query($sql) or die(mysql_error());
	include('../includes/closeDb.php');
	header("Location: index.php");
}
if (isset($_POST['submitShow'])) {
	$id					= $_POST['id'];
	$venue				= $_POST['venue'];
	$address			= $_POST['address'];
	$city				= $_POST['city'];
	$state				= $_POST['state'];
	$zip				= $_POST['zip'];
	$performanceDate	= $_POST['performanceDate'];
	$performanceTime	= $_POST['performanceTime'];
	$cost				= $_POST['cost'];
	$description		= $_POST['description'];
	
	include('../includes/config.php');
	$sql = "UPDATE shows SET ".
			"venue='$venue', ".
			"address='$address', ".
			"city='$city', ".
			"state='$state', ".
			"zip='$zip', ".
			"performanceDate='$performanceDate', ".
			"performanceTime='$performanceTime', ".
			"cost='$cost', ".
			"description='$description' ".
			"WHERE pk1 = ".$id;
	$result = mysql_query($sql) or die(mysql_error());
	include('../includes/closeDb.php');
	header('Location: index.php');
} else {
	$id = $_GET['id'];

	include('../includes/config.php');
	$sql = 'SELECT * FROM shows WHERE pk1 = '.$id;
	$result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($result)) {
		$venue 				= $row['venue'];
		$address			= $row['address'];
		$city				= $row['city'];
		$state				= $row['state'];
		$zip				= $row['zip'];
		$performanceDate	= $row['performanceDate'];
		$performanceTime	= $row['performanceTime'];
		$cost				= $row['cost'];
		$description		= $row['description'];
	}
	include('../includes/closeDb.php');
}
?>
<html>
	<head>
		<title>Edit Show</title>
	</head>
<body>
<h3>Edit Show</h3>
<form action='' method='post' name='editShowFrm'>
<table>
	<tr>
		<td>Venue</td>
		<td><input type='text' name='venue' value='<?php echo $venue ?>' /></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type='text' name='address' value='<?php echo $address ?>' /></td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type='text' name='city' value='<?php echo $city ?>' /></td>
	</tr>
	<tr>
		<td>State</td>
		<td><input type='text' name='state' value='<?php echo $state ?>' /></td>
	</tr>
	<tr>
		<td>Zip</td>
		<td><input type='text' name='zip' value='<?php echo $zip ?>' /></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type='text' name='performanceDate' value='<?php echo $performanceDate ?>' /></td>
	</tr>
	<tr>
		<td>Time</td>
		<td><input type='text' name='performanceTime' value='<?php echo $performanceTime ?>' /></td>
	</tr>
	<tr>
		<td>Cost</td>
		<td><input type='text' name='cost' value='<?php echo $cost ?>' /></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea style='width:400px;height:150px;' name='description'><?php echo $description ?></textarea></td>
	</tr>
	<tr>
		<td colspan='2'>
			<input type='hidden' name='id' value='<?php echo $id ?>' />
			<input type='submit' name='submitShow' value='Submit' />
		</td>
	</tr>
</table>
</form>
</body>
</html>