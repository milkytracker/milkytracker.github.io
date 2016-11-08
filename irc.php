<?php
	// Test if browser accepts correct xhtml MIME type, serve accordingly
	if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) {
	  header("Content-type: application/xhtml+xml");
	}
	else {
	  header("Content-type: text/html");
	}



	// 
	if (!$_POST['nick']) header("Location: ./?community");

	$nick = strip_tags($_POST['nick']);
	//$nick = str_replace("\\", "\", $nick);
	$fix = strip_tags($_POST['server']);

	//
	if ($fix != ".eu" && $fix != ".us") $fix="";

	$server = "irc".$fix.".esper.net";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
	xml:lang="en" >
	<head style="height: 100%;">
		<title>#MilkyTracker Chatroom</title>
		<meta name="Description" content="#MilkyTracker on EsperNet IRC." />
		<meta name="Keywords" content="MilkyTracker, IRC, tracker, tracking, modules, mods, .XM, .MOD, demoscene, chiptune, discussion, chat, talk" />
		<link rel="stylesheet" type="text/css" href="style/screen.css" />
		<link rel="shortcut icon" type="text/css" href="favicon.ico" />
	</head>
	<body style="height: 100%;">
		<script type="text/javascript">
			//<![CDATA[
				document.title=(document.title+String.fromCharCode(0));
			//]]>
		</script>
		<div class="section" style="height: 100%; margin-top: 0; padding-top: 0; position:absolute; top:0px; bottom:0px; left:0px; right:0px;">
			<applet codebase="pjirc" code="IRCApplet.class" archive="irc.jar, pixx.jar" width="100%" height="100%" alt="The chat applet requires Java to be installed.">
				<param name="CABINETS" value="irc.cab, securedirc.cab, pixx.cab" />
				<param name="nick" value="<?php echo $nick; ?>" />
				<param name="alternatenick" value="<?php echo $nick; ?>??" />
				<param name="name" value="MilkyTracker.net PJIRC" />
				<param name="host" value="<?php echo $server; ?>" />
				<param name="gui" value="pixx" />
				<param name="quitmessage" value="Saving BACKUP.XM..." />
				<param name="autoconnection" value="true" />
				<param name="command1" value="/join #MilkyTracker" />
				<param name="useinfo" value="false" />
				<param name="asl" value="false" />
				<param name="pixx:showconnect" value="false" />
				<param name="pixx:showchanlist" value="false" />
				<param name="pixx:showabout" value="false" />
				<param name="pixx:showhelp" value="false" />
				<param name="pixx:showdock" value="false" />
				<param name="pixx:showclose" value="false" />
				<param name="pixx:showstatus" value="false" />
			    <param name="pixx:color6" value="223344" />
			</applet>
		</div>
	</body>
</html>