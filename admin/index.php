<?
include('../includes/security.php');
?>
<html>
<head>
	<title>The Wars of 1812 Admin</title>
	<script language="javascript" src="lib/tabs/jquery-1.1.3.1.pack.js"></script>
	<script src="jquery.history_remote.pack.js" type="text/javascript"></script>
	<script language="javascript" src="lib/tabs/jquery.tabs.js"></script>
	<style type="text/css">@import url(lib/jquery-calendar.css);</style>
	<script type="text/javascript" src="lib/jquery-calendar.js"></script>
	<script language="javascript">
		$(document).ready(function() {
			$('#container').tabs({remote: true, fxFade: true, fxSpeed: 'fast'});
		});
	</script>
	<link rel="stylesheet" href="lib/tabs/jquery.tabs.css" type="text/css" media="print, projection, screen">
	<!-- Additional IE/Win specific style sheet (Conditional Comments) -->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="lib/tabs/jquery.tabs-ie.css" type="text/css" media="projection, screen">
        <![endif]-->
</head>

<body>
<br /><br />

<div id="container">
     <ul>
         <li><a href="shows.php"><span>Shows</span></a></li>
         <li><a href="news.php"><span>News</span></a></li>
		 <li><a href="bio.php"><span>Bio</span></a></li>
		 <li><a href="contact.php"><span>Contact Info</span></a></li>
		 <li><a href="links.php"><span>Links we like</span></a></li>
		 <li><a href="press.php"><span>Press</span></a></li>
		 <li><a href="logoff.php"><span>Log Off</span></a></li>
     </ul>
</div>

</body>
</html>