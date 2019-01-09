<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test2",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'kopera';
$databaseUsername = 'root';
$databasePassword = 'root';

$mysql = mysql_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>