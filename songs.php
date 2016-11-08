<?php
	$songList = array();

	function buildSongList($collection)
	{
		global $songList;
		$dir="songs";
		$search=".zip";  // Find the filename-extension junction...
		$replace=".mp3"; // ...and insert thumbnail image marker
		$length = count($songList[$collection]);
		echo("<table class=\"songs\">\n");
		echo("\t<tr>\n\t\t<td><h4>More songs made with MilkyTracker:</h4></td>\n\t\t<td>source</td>\n\t\t<td>stream</td>\n\t</tr>\n");
		for ($i=0;$i<$length;$i++)
		{
			$file = $dir."/".$songList[$collection][$i];
			$stream = str_replace($search, $replace, $file);
			$artist = $songList[$collection][++$i];
			$title = $songList[$collection][++$i];
			echo("\t<tr>\n\t\t<td>\n\t\t\t$artist &ndash; $title\n\t\t</td>\n\t\t<td>\n\t\t\t<a href=\"$file\">ZIP/XM</a>\n\t\t</td>\n\t\t<td><a href=\"$stream\">MP3</a>\n\t\t</td>\n\t</tr>\n");
		}
		echo("\t<tr>\n\t\t<td></td>\n\t\t<td></td>\n\t\t<td><a href=\"songs/MilkyTracker-MoreSongs.pls\">Stream all</a></td>\n\t</tr>\n");
		echo("</table>\n");
	}
?>