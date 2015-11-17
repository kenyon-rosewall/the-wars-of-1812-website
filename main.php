<?
$redirectUrl = "dyn/".$_GET['url'].".php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>the Wars of 1812</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="verify-v1" content="WFxiQ1zcOnhyjZd0ghiyENcRixNjczuenWYi/wJlNh0=" />
	<meta name="description" content="Minneapolis band that lives in St Paul.  Check out the Wars of 1812's tour dates, information, music, videos, news, and much more">
	<meta name="keywords" content="the wars of 1812, the wars, minneapolis band, st paul band, saint paul band, folk, rock, indie, status quo ante bellum, status quo, peter pisano, mei-ling anderson, peter rosewall, bobby maher, guitar, bass, drums, keyboards, live music, live band, entertainment">
	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
	<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
	<script type="text/javascript"> 
	  var gaJsHost = (("https:" == document.location.protocol) ? 
	  "https://ssl." : "http://www."); 
	  document.write(unescape("%3Cscript src='" + gaJsHost + 
	  "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E")); 
	</script> 
	<script type="text/javascript"> 
	   var pageTracker = _gat._getTracker("UA-2639948-1"); 
	   pageTracker._initData(); 
	   pageTracker._trackPageview('<?php echo $redirectUrl ?>'); 
	</script>
<script type="text/javascript">
<!--
window.location = "http://www.myspace.com/thewarsof1812"
//-->
</script>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.hotkeys.js"></script>
	<script type="text/javascript">
		jQuery.noConflict();
	</script>
	<script type="text/javascript" src="_common/js/mootools.js"></script>
	<script type="text/javascript" src="dyn/multibox.js"></script>
	<script type="text/javascript" src="media/jw_media_player/swfobject.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			//jQuery('#content').load('<?php echo $redirectUrl ?>');
			addKey('up');
			
			jQuery.hotkeys.add('up', function(){ 
				jQuery.hotkeys.remove('up');
				jQuery.hotkeys.add('up', function(){
					jQuery.hotkeys.remove('up');
					jQuery.hotkeys.add('down', function() {
						jQuery.hotkeys.remove('down');
						jQuery.hotkeys.add('down', function(){
							jQuery.hotkeys.remove('down');
							jQuery.hotkeys.add('left', function() {
								jQuery.hotkeys.remove('left');
								jQuery.hotkeys.add('right', function() {
									jQuery.hotkeys.remove('right');
									jQuery.hotkeys.add('left', function() {
										jQuery.hotkeys.remove('left');
										jQuery.hotkeys.add('right', function() {
											jQuery.hotkeys.remove('right');
											jQuery.hotkeys.add('b', function() {
												jQuery.hotkeys.remove('b');
												jQuery.hotkeys.add('a', function() {
													jQuery.hotkeys.remove('a');
													alert('Konami fever!')
												})
											})
										})
									})
								})
							})
						})
					})
				})
			});
		});

		function rollOver(el) {
			//alert(el.src);
			if (el.className != 'selected') {
				var src = el.src;
				src = src.replace('.jpg','_roll.jpg');
				el.src = src;
			}
		}

		function rollOut(el) {
			//alert(el.src);
			if (el.className != 'selected') {
				var src = el.src;
				src = src.replace('_roll.jpg','.jpg');
				el.src = src;
			}
		}

		function loadMain(el) {
			if(jQuery('.selected').length > 0 ) {
				var imgClass = jQuery('.selected:eq(0)').attr('src');
				imgClass = imgClass.replace('_roll.jpg','.jpg');
				jQuery('.selected:eq(0)').attr('src',imgClass).removeClass();
			}
			el.className = 'selected';
			var url = el.src.replace(/.+\//,'').replace('_roll.jpg','');
			//alert(url);
			window.location = 'main.php?url=' + url;
		}
	</script>
	<style>
	#rightbar {
	float: left;
	width: 46px;
	height: 651px;
	background-image: url(imgs/bind2.jpg);
	background-repeat: no-repeat;
	background-position: left bottom;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
	border-left-width: 0px;
	margin-top:-16px;
	}
      #wrapper {
	width: 900px;
	margin: 0px auto;
	background-color: white;
	background-image: url(imgs/bg2.jpg);
	background-repeat: no-repeat;
	background-position: left top;
	border-top-width: 2px;
	border-bottom-width: 2px;
	border-left-width: 2px;
	border-top-style: solid;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: gray;
	border-bottom-color: gray;
	border-left-color: gray;
      }
      #header {
        text-align: center;
      }
      #navigation {
        position: absolute;
		height: 0px;
      }
      #navigation ul {
        float: left;
        clear: left;
        list-style: none;
        padding: 8px 0px 0px 0px;
        margin: 0px 0px 0px 96px;
        background: url(images/main_01_bg.gif) repeat-y top left;
        width: 250px;
        position: relative;
        top: -385px;
      }
	#navfoot
	{
		width:900px;
		text-align:center;
	}
	#navfoot a {
		color:gray;
		font-size:8px;
		text-decoration:none;
		
	}
      #navigation ul li {
        padding: 0px;
        margin: 0px 6px;
        height: 38px;
		cursor: pointer;
      }
      #navigation ul li a {
        margin: 0px;
        padding: 0px;
      }
      #content {
	float: left;
	clear: right;
	margin-left: 383px;
	margin-top: 10px;
	width: 480px;
	height: 390px;
	overflow: auto;
	padding: 0px;
	z-index: 100;
      }
      #footer {
        clear: both;
        height: 184px;
      }
	body {
		background-color:silver;
	}
	h3 {
		background-color: gray;
		width: 98%;
		padding: 4px;
		color: white;
		margin: 0px;
	}
	.mainText {
		font-family: Times New Roman,Arial,Helvetica,sans-serif;
		font-size: 12px;
		color: #333;
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
	.date {
		font-size:x-small;
		color:lightgray;
		background-color:white;
		float:right;
		border:medium double lightgray;
		padding:2px;
	}
	th {
		margin:0px;
	}
	#content a {
		color:red;
		font-size:11px;
	}
    </style>
  </head>
  <body>
	<!--[if lte IE 6]>
		<h5 class="titleText">If the page looks a little strage, please update your Internet Explorer, or switch to Firefox</h5><br />
	<![endif]-->
  <table cellpadding="0" cellspacing="0" border="0" align="center">
  	<tr>
		<td>
    <div id="wrapper">
      <div id="header">
        <a style="border: 0px solid black;" href="http://thewarsof1812.com/main.php?url=home"><img src="imgs/wars_label_logo.jpg" style="border: 0px solid black;" width="900" height="67" /></a>      </div>
      <div id="content">
        <?php include($redirectUrl) ?>
      </div>
      <div id="footer">
        <div id="navigation">
          <ul>
            <li><img src="images/rolls/home.jpg" border="0" onclick="loadMain(this)" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></li>
            <li><img src="images/rolls/bio.jpg" border="0" onclick="loadMain(this)" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></li>
            <li><img src="images/rolls/shows.jpg" border="0" onclick="loadMain(this)" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></li>
            <li><a href="http://thewarsof1812.com/dyn/media.php"><img src="images/rolls/media.jpg" border="0" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></a></li>
            <li><img src="images/rolls/forums.jpg" border="0" onclick="loadMain(this)" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></li>
            <li><img src="images/rolls/contact.jpg" border="0" onclick="loadMain(this)" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></li>
            <li><img src="images/rolls/links.jpg" border="0" onclick="loadMain(this)" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></li>
            <li><a href="http://www.myspace.com/thewarsof1812" target="_blank"><img src="images/rolls/myspace.jpg" border="0" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></a></li>
            <li><img src="images/rolls/press.jpg" border="0" onclick="loadMain(this)" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></li>
            <li><a href="http://paperlily.net" target="_blank"><img src="images/rolls/paperlily.jpg" border="0" onmouseover="rollOver(this)" onmouseout="rollOut(this)" /></a></li>
          </ul>
        </div>
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="404" height="184" id="tapePlayer" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="allowFullScreen" value="false" />
		<param name="movie" value="tapePlayer2.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />	<embed src="tapePlayer2.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="404" height="184" name="tapePlayer" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
      </div>
		
    </div>
	<div id="navfoot">
		<a href='main.php?url=home'>Home</a>
		<a href='main.php?url=bio'>Bio</a>
		<a href='main.php?url=shows'>Live Shows</a>
		<a href='dyn/media.php'>Media</a>
		<a href='main.php?url=forums'>Forums</a>
		<a href='main.php?url=contact'>Contact</a>
		<a href='main.php?url=links'>Links</a>
		<a href='http://www.myspace.com/thewarsof1812' target='_blank'>Myspace</a>
		<a href='main.php?url=press'>Press</a>
		<a href='http://paperlily.net' target='_blank'>Paperlily</a>
	</div>
		</td>
		<td align="left">
			<div id="rightbar">
		</div>
	  </td>
	</tr>
</table>
  </body>
</html>