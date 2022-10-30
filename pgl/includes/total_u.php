<?php  
	

	// users stats
	$stats_query = "SELECT * FROM users";
    if ($stmt = mysqli_prepare($db_var, $stats_query)) {
	    mysqli_stmt_execute($stmt);
	    while (mysqli_stmt_fetch($stmt)) {
	  		// fetch results
	    }

	    // total
	    $users_stats_total = mysqli_stmt_num_rows($stmt);
	   
	    // close statement
	    mysqli_stmt_close($stmt);
	}

	
?>