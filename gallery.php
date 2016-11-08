<?php
	$gallery = array();

	function buildGallery($collection)
	{
		global $gallery;
		$dir="screenshots"; // Screenshot directory name
		$search=".";  // Find the filename-extension junction...
		$replace=".thumb."; // ...and insert thumbnail image marker
		$length = count($gallery[$collection]);
		for ($i=0;$i<$length;$i++)
		{
			$shot = $gallery[$collection][$i];
			$thumb = str_replace($search, $replace, $shot);
			$description = $gallery[$collection][++$i];
			$whosepic = substr($shot, 0, strpos($shot, "-"));
			if ($whosepic != "Kmuland" && $whosepic != "pailes" && $whosepic != "raina" && $whosepic != "Deltafire")
			{
				$description=$description." Image from ".$whosepic.".";
			}
			echo("\t<a href=\"$dir/$collection/$shot\" rel=\"lightbox\" title=\"$description\"><img src=\"$dir/$collection/$thumb\" alt=\"$shot\" /></a>\n");
		}
	}
?>