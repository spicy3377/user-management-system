<?php 
	// connect to db
	include "db/connection.php";

	// start session
	session_start();

	// user 
    $user = $_SESSION['username'];
   
	session_unset();

    // destroy session
	session_destroy();

    // destroy cookie
	setcookie ("username", "", time()- (60 * 60 * 24 * 30), "/");

	// close db connection
	mysqli_close($db_var);

	// direct user to login page
	header("location: index.php"); 
	exit();
?>