<html>
<head>
	<title>The Wars of 1812 Media</title>
	<script type="text/javascript"> 
	  var gaJsHost = (("https:" == document.location.protocol) ? 
	  "https://ssl." : "http://www."); 
	  document.write(unescape("%3Cscript src='" + gaJsHost + 
	  "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E")); 
	</script> 
	<script type="text/javascript"> 
	   var pageTracker = _gat._getTracker("UA-2639948-1"); 
	   pageTracker._initData(); 
	   pageTracker._trackPageview(); 
	</script>
<style type='text/css'>
	a {
		color:red;
		font-size:11px;
		font-family:Times New Roman;
	}
	.mainDiv {
		background-color:#121212;
		width:100%;
		height:100%;
	}
	.titleText {
		font-family: monospace;
		color: white;
		background-color:black;
		/*font-style: italic;*/
		margin:0px;
		padding:3px;
		text-transform:capitalize;
	}
	body {
		background-color:#121212;
	}
</style>
</head>
<body>
<div class='mainDiv'>
<p><a href="http://thewarsof1812.com">&lt;-- Back to main page</a></p>
<fieldset>
<legend class="titleText">Pictures</legend>
<?
	if ($pics[0]!="")
	{
			$i = 0;
		foreach ($pics as $p)
		{
			$i++;
			$tnp = $imagefolder."/tn_".$p;
			$pp = $imagefolder."/".$p;
			
			//createthumb($pp,$tnp,150,150);
			//$tnp = str_replace("../","",$tnp);
			//$pp = str_replace("../","",$pp);
			//echo "<a href='$pp' id='mb$i' class='mb' title='$p'><img src='$pp' width='50' height='50' /></a>";
			//echo "<div class='multiBoxDesc mb$i'>$p</div>";
		}
	}
?>
<script type="text/javascript" src="../media/jw_media_player/swfobject.js"></script>
<div id="something">
	This SlideShowPro photo gallery requires the Flash Player plugin and a web browser with JavaScript enabled.
</div>
<script type="text/javascript">
var so = new SWFObject("loader.swf", "loader", "100%", "600px", "8", "#121212");
	so.addParam("allowFullScreen","true");
	so.addParam("quality", "best");
	so.addVariable("paramXMLPath","http://thewarsof1812.com/dyn/param.xml");
	so.write("something");	              
</script>
</fieldset>
</div>
</body>
</html>