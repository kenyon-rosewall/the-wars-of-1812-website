<?
include('../includes/security.php');
?>
<?php
switch ($_POST['type']) {
	case 'shows':
	$venue 				= $_POST['venue'];
	$address 			= $_POST['address'];
	$city 				= $_POST['city'];
	$state				= $_POST['state'];
	$zip				= $_POST['zip'];
	$performanceDate	= $_POST['performanceDate'];
	$arPD = split("/",$performanceDate);
	$performanceDate	= $arPD[2]."-".$arPD[1]."-".$arPD[0];
	$performanceTime	= $_POST['performanceTime'];
	$cost				= $_POST['cost'];
	$description		= $_POST['description'];
	$addedBy			= "Admin";
	$sql = "INSERT INTO shows (venue,address,city,state,zip,performanceDate,performanceTime,addedBy,dateAdded,cost,description) VALUES 
		('$venue','$address','$city','$state','$zip','$performanceDate','$performanceTime','$addedBy',NOW(),'$cost','$description')";
	break;
	
	case 'news':
	$content			= $_POST['content'];
	$title				= $_POST['title'];
	$sql = "INSERT INTO news (content, dateAdded, addedBy, title) VALUES ('$content',NOW(),'Admin','$title')";
	break;
	
	case 'bio':
	$bio = $_POST['bio'];
	$sql = "UPDATE main SET bio='$bio' WHERE pk1 = 1";
	break;
	
	case 'press':
	$link = $_POST['link'];
	$label = $_POST['label'];
	$_POST['strong'] == 't' ? $strong = 't' : $strong = 'f';
	$sql = "INSERT INTO press (link, label, strong) VALUES ('$link', '$label', '$strong')";
}

//$addedBy			= "Kenpete";

include('../includes/config.php');

//die($sql);
$result = mysql_query($sql) or die(mysql_error());

include('../includes/closeDb.php');

header('Location: index.php');
?>