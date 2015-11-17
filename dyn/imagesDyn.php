<?
function ditchtn($arr,$thumbname)
{
	foreach ($arr as $item)
	{
		if (!preg_match("/^".$thumbname."/",$item)){$tmparr[]=$item;}
	}
	return $tmparr;
}

/*
	Function createthumb($name,$filename,$new_w,$new_h)
	creates a resized image
	variables:
	$name		Original filename
	$filename	Filename of the resized image
	$new_w		width of resized image
	$new_h		height of resized image
*/	
function createthumb($name,$filename,$new_w,$new_h)
{
	
	$system=explode(".",$name);
	if (preg_match("/jpg|jpeg/",$system[sizeof($system)-1])){$src_img=imagecreatefromjpeg($name);}
	if (preg_match("/png/",$system[sizeof($system)-1])){$src_img=imagecreatefrompng($name);}
	$old_x=imageSX($src_img);
	$old_y=imageSY($src_img);
	if ($old_x > $old_y) 
	{
		$thumb_w=$new_w;
		$thumb_h=$old_y*($new_h/$old_x);
	}
	if ($old_x < $old_y) 
	{
		$thumb_w=$old_x*($new_w/$old_y);
		$thumb_h=$new_h;
	}
	if ($old_x == $old_y) 
	{
		$thumb_w=$new_w;
		$thumb_h=$new_h;
	}
	$dst_img=ImageCreateTrueColor($thumb_w,$thumb_h);
	imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 
	if (preg_match("/png/",$system[sizeof($system)-1]))
	{
		imagepng($dst_img,$filename); 
	} else {
		imagejpeg($dst_img,$filename); 
	}
	imagedestroy($dst_img); 
	imagedestroy($src_img); 
}

/*
        Function directory($directory,$filters)
        reads the content of $directory, takes the files that apply to $filter 
		and returns an array of the filenames.
        You can specify which files to read, for example
        $files = directory(".","jpg,gif");
                gets all jpg and gif files in this directory.
        $files = directory(".","all");
                gets all files.
*/
function directory($dir,$filters)
{
	$handle=opendir($dir);
	$files=array();
	if ($filters == "all"){while(($file = readdir($handle))!==false){$files[] = $file;}}
	if ($filters != "all")
	{
		$filters=explode(",",$filters);
		while (($file = readdir($handle))!==false)
		{
			for ($f=0;$f<sizeof($filters);$f++):
				$system=explode(".",$file);
				if ($system[sizeof($system)-1] == $filters[$f]){$files[] = $file;}
			endfor;
		}
	}
	closedir($handle);
	return $files;
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<gallery>';

$imagefolder='../media/photos/nyroof';
$thumbsfolder='../media/photos/nyroof/thumbnails';
$pics=directory($imagefolder,"jpg,JPG,JPEG,jpeg,png,PNG");
$pics=ditchtn($pics,"tn_");

echo '<album lgPath="http://thewarsof1812.com/media/photos/nyroof/" tnPath="http://thewarsof1812.com/media/photos/nyroof/" title="Tour" description="Pictures on the Roof in New York City" tn="../media/photos/nyroof/n19401885_30765506_9545.jpg" audio="../media/music/demos/02 Something Westward.mp3" audioCaption="Something Westward from Here Are My Black Clothes">';
if ($pics[0]!="")
{
		$i = 0;
	foreach ($pics as $p)
	{
		$i++;
		$tnp = $imagefolder."/tn_".$p;
		$pp = $imagefolder."/".$p;
		list($width, $height, $type, $attr) = getimagesize($pp);
		//echo "<img src=\"img/flag.jpg\" $attr alt=\"getimagesize() example\" />";
		//createthumb($pp,$tnp,$width/4,$height/4);
		//createthumb($pp,$tnp,50,50);
		echo "<img src='$p' title='$p' caption='Photo Courtesy of Mattie' link='' target='_blank' pause='' />";
	}
}
echo '</album>';

$imagefolder='../media/photos/elli';
$thumbsfolder='../media/photos/elli/thumbnails';
$pics=directory($imagefolder,"jpg,JPG,JPEG,jpeg,png,PNG");
$pics=ditchtn($pics,"tn_");

echo '<album lgPath="http://thewarsof1812.com/media/photos/elli/" tnPath="http://thewarsof1812.com/media/photos/elli/" title="Photos" description="Elli\'s Pictures of the Wars" tn="../media/photos/elli/1.jpg" audio="../media/music/sqab/the wars of 1812 - 02 - radios unsigned.mp3" audioCaption="Radios Unsigned from Status Quo Ante Bellum">';
if ($pics[0]!="")
{
		$i = 0;
	foreach ($pics as $p)
	{
		$i++;
		$tnp = $imagefolder."/tn_".$p;
		$pp = $imagefolder."/".$p;
		list($width, $height, $type, $attr) = getimagesize($pp);
		//echo "<img src=\"img/flag.jpg\" $attr alt=\"getimagesize() example\" />";
		//createthumb($pp,$tnp,$width/4,$height/4);
		//createthumb($pp,$tnp,50,50);
		echo "<img src='$p' title='$p' caption='Photo Courtesy of Elli Rader' link='' target='_blank' pause='' />";
	}
}
echo '</album>';


/*
echo '<album lgPath="http://thewarsof1812.com/media/music/sqab/" tnPath="" title="SQAB" description="" tn="../imgs/smallSQABcover.jpg">';
$imagefolder='../media/music/sqab';
$pics=directory($imagefolder,"mp3");
if ($pics[0]!="") {
	foreach($pics as $p)
	{
		echo "<a href='http://thewarsof1812.com/media/music/sqab/$p'>$p</a>";
	}
}
echo '</album>';
*/
echo '</gallery>';
?>