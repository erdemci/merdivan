<?php 
	
	$hostname="localhost";
	$user="withusuc_veysel";
	$password="veysel123";
	$dbName="withusuc_belediye";
	
	$conn=mysql_connect($hostname,$user,$password);
	mysql_select_db($dbName,$conn);
	mysql_query("SET NAMES 'utf8' ");
mysql_query("SET CHARACTER SET utf-8 ");
mysql_query("SET COLLATION_CONNECTION='utf8_turkish_ci'");

	
?>