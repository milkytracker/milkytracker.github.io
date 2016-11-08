<?php
	if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) {
	  header("Content-type: application/xhtml+xml");
	}
	else {
	  header("Content-type: text/html");
	}



	$page_request = strip_tags($_SERVER['QUERY_STRING']);



	$pages = array();

	$pages[about] = array(
		"link" => "About",
		"title" => "About MilkyTracker"
	);

	$pages[news] = array(
		"link" => "News",
		"title" => "MilkyTracker News"
	);

	$pages[screenshots] = array(
		"link" => "Screenshots",
		"title" => "MilkyTracker Screenshots"
	);

	$pages[download] = array(
		"link" => "Downloads",
		"title" => "MilkyTracker Downloads"
	);

	$pages[documentation] = array(
		"link" => "Documentation",
		"title" => "MilkyTracker Documentation"
	);

	$pages[community] = array(
		"link" => "Community",
		"title" => "MilkyTracker Community"
	);

	$pages[credits] = array(
		"link" => "Credits",
		"title" => "MilkyTracker Credits"
	);

	$pages[donate] = array(
		"link" => "Donate!",
		"title" => "MilkyTracker Donations"
	);

	$pages[links] = array(
		"link" => "Links",
		"title" => "MilkyTracker Links"
	);



	foreach($pages as $page => $foo)
	{
		if ($page_request == $page)
		{
			$title = $pages[$page][title];
			break;
		}
		else
		{
			$page =	"news";
			$title = $pages[news][title];
		}
	}
	unset($foo);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
	<head>
		<title><?php echo($title); ?></title>
		<meta name="Description" content="Open source multi-platform Fasttracker II compatible music application." />
		<meta name="Keywords" content="MilkyTracker, FT2, Fasttracker II, Fast Tracker, tracker, tracking, modules, mods, .XM, .MOD, demoscene, chiptune" />
		<link rel="shortcut icon" type="text/css" href="favicon.ico" />
		<link rel="stylesheet" href="style/screen.css" type="text/css" />
		<link rel="stylesheet" href="slimbox/css/slimbox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="script/functions.js"></script>
		<script type="text/javascript" src="slimbox/js/mootools-1.11.js"></script>
		<script type="text/javascript" src="slimbox/js/slimbox.js"></script>
		<!--[if lte IE 6]>
			<style type="text/css" media="screen">
				body
				{
					behavior: url(script/csshover2.htc);
				}
				
				img
				{
					behavior: url(script/iepngfix.htc);
				}

				li ul
				{
					border-width: 1px;
				}

				#SiteMeter
				{
					filter: alpha(opacity=33);
				}
				
				#SiteMeter:hover
				{
					filter: alpha(opacity=67);
				}
			</style>
		<![endif]-->
	</head>
	<body>
		<h1><a href="./"><img src="img/kenet-LogoSmall.png" alt="MilkyTracker" height="128" width="320"/></a></h1>
		<p id="version" title="Current MilkyTracker version">
			v0.90.86
		</p>
		<ul id="navigation">
<?php
	foreach ($pages as $link => $foo)
	{
		echo("\t\t\t<li");
		if ($link != $page)
			echo("><a href=\"?$link\">$foo[link]</a></li>\n");
		else
			echo(" id=\"current\">$foo[link]</li>\n");
	}
	unset($foo);
?>
			<li class="external">
				<a href="http://modarchive.org/forums/index.php?board=30.0">Forum &#9658;</a>
			</li>
		</ul>
		<div id="content">
<?php
	$milkyStrings = array("MilkyTracker ", " MilkyTracker");
	$title = str_replace($milkyStrings, "", $title);
	echo ("<h2>$title</h2>\n");
	include_once($page.".html");
?>

		</div>
<!-- Start of StatCounter Code -->
		<script type="text/javascript">
			sc_project=3639450; 
			sc_invisible=1; 
			sc_partition=43; 
			sc_security="d71ac808"; 
		</script>
		<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script>
		<noscript>
			<div class="statcounter"><a class="statcounter" href="http://www.statcounter.com/free_hit_counter.html">
				<img class="statcounter" src="http://c44.statcounter.com/3639450/0/d71ac808/1/" alt="hit counter code" /></a>
			</div>
		</noscript>
<!-- End of StatCounter Code -->
	</body>
</html>
