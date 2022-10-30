<?php
// start session
session_start();

include "db/connection.php";
include "includes/addup.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Control Panel Access</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cp.css" rel="stylesheet">

</head>

<body>
    <noscript>
        <div style="background-color:#871D1D;color:white;padding:5px;font-weight:bold;text-align:center;">Please enable javascript in your browser to access completely</div>
    </noscript>
    <header class="navbar sticky-top header_color p-0">
        <div class="header_t pl-2"><a href="home" class="pointer"><span class="icon icon-arrow-left"></span></a>&nbsp;&nbsp;Admin Dashboard</div>

    </header>
    <?php
    // val_worker

    ?>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg_ab sidebar">
                <div class="sidebar-sticky list-group" id="list-tab" role="tablist">
                    <ul class="nav flex-column mb-2 mt-1">
                        <li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1">
                                <b data-placement="bottom" data-toggle="tooltip" title="menu">Menu</b>
                            </h6>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="list-group-item list-group-item-action list_group_item_k"  href="dashboard.php" role="">
                                Statistics
                            </a>
                            <a class="list-group-item list-group-item-action list_group_item_k"  href="viewuser.php">
                                View users
                            </a>
                        </li>
                        <li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1">
                                <b data-placement="bottom">Options</b>
                            </h6>
                        </li>
                        <li class="nav-item">
                            <a class="list-group-item list-group-item-action list_group_item_k"  href="add.php" >
                                Add Record
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="list-group-item list-group-item-action list_group_item_k " id="stats" data-toggle="tab" href="#stats_set">
                                Edit Record
                            </a>
                        <li class="nav-item">
                            <a class="list-group-item list-group-item-action list_group_item_k "  href="delete.php">
                                Delete Record
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 tab-content" id="nav-tabContent">
            <h5><center>Edit a Record<center></h5>
            <br>
            <?php
            if (isset($_GET['eddited'])) {
                
	

                $p = '<font color="green"><center><b>You succesfully edited a record</b></center></font>';
            } else {
                $p = '';
            }
        ?>

        <?php echo $p ?>
            <div class="container-fluid">
        <div class="row">
            <?php
            
	$query = "SELECT * FROM subjects  ORDER BY id DESC";
	$stmt = mysqli_prepare($db_var, $query);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		// fetch results
      	$sm_id = $row["id"];
      	$post_key = $row["post_id"];
        $subject = $row["subject"];
      	$date_n_time = $row["date_n_time"];

		

			echo "
          
					<div class='col-md-4 mt-2 mb-2'>
	                  	<div id='s-w-body'>
	                  		<center>
			                   
			                    <a href='' target='_blank'>
			                      <b title=''>".$subject."</b>
			                    </a>
			                   
                                <hr />
                                <form  method='POST' action='includes/eddited.php?key=".$post_key."' enctype='multipart/form-data' accept-charset='utf-8'>
			                   
			                    <div style='margin-left:4px';margin-right:6px;font-size:14px;'>
                                <input type='text' class='form-control' name='edit' value='".$subject."'>
			                    </div>
			                    <div class='p-2' style='width:100px;'>
			                 
			                        <button type='submit'  class='btn btn-outline-secondary btn-block'><span class='icon icon-refresh'></span>Edit</button>
			                  
			                    </div>
                                </form>
			                </center>
		                </div>
		            </div>
                    ";
	    }
	    // close statement
		mysqli_stmt_close($stmt);  
			    
	// close db connection
  	mysqli_close($db_var);
    ?>
            </div>

    </div>
     

    <script src="scripts/jquery.min.js"></script>
</body>

</html>