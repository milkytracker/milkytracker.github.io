<?php
	$linkList = array();

	function buildLinkList($collection)
	{
		global $linkList;
		$dir="links";
		$length = count($linkList[$collection]);
		echo("<table class=\"links\">\n");
		for ($i=0;$i<$length;$i++)
		{
			$name = $linkList[$collection][$i];
			$description = $linkList[$collection][++$i];
			$url = $linkList[$collection][++$i];
			if ($linkList[$collection][++$i]!="") 
				$banner = "\n\t\t\t<a href=\"$url\"><img src=\"".$dir."/".$linkList[$collection][$i]."\" alt=\"link banner\" /></a>";
			else
				$banner = "";
			echo("\t<tr class=\"hover\" onclick=\"javascript:document.location='$url';\">\n\t\t<td class=\"banner\">$banner\n\t\t</td>\n\t\t<td>\n\t\t\t<h5><a href=\"$url\">$name</a> <span class=\"url\"><a href=\"$url\">$url</a></span></h5>\n\t\t\t$description\n\t\t</td>\n\t</tr>\n");
		}
		echo("</table>\n");
	}
?>