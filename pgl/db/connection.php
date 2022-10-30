<?php

	// defined connection
	define('SERVER', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'pgl');

		$db_var = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
	
	// Evaluate connection
	if(mysqli_connect_errno()) {
		echo 'A problem occured, please try again later';
		exit();
	}
?>