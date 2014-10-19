<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	//connection to the database
	$con = mysql_connect($hostname, $username, $password) 
  	or die("Unable to connect to MySQL" . mysql_error());

	$db = mysql_select_db('HackNY', $con);
	if(!$db)
	{
		die("Can't use hackathon database: " . mysql_error());
	}

?>