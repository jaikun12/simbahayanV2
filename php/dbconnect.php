<?php
	$server = 'localhost';
	$username = 'ustiicss_cbms';
	$password = 'watashiwaJai@2016';

	$dbconn = mysql_connect($server,$username,$password);

	$database = 'ustiicss_cbms';

	$select_db = mysql_query("USE DATABASE $database;");
?>