<?php

  // database connection
  include "db/connection.php";

  // start session
  session_start();

  $id = $_COOKIE["username"];

  $is_a = "SELECT `admin` FROM users WHERE unique_id = ?";
  if ($stmt = mysqli_prepare($db_var, $is_a)) {
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $account_type);
    while (mysqli_stmt_fetch($stmt)) {
      // fetch results
    }

    // if account type is an admin
    if ($account_type == "yes") {
        
      // do nothing
    } elseif ($account_type == "no") {

      // Redirect to user home
      header("location: profile.php");

      exit();
    }
  }


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
    <noscript><div style="background-color:#871D1D;color:white;padding:5px;font-weight:bold;text-align:center;">Please enable javascript in your browser to access  completely</div></noscript>
    <header class="navbar sticky-top header_color p-0">
      <div class="header_t pl-2"><a href="home" class="pointer"><span class="icon icon-arrow-left"></span></a>&nbsp;&nbsp;Admin Dashboard</div>
        <div class="d-flex h_link wh_wrkr">
          <b class="pt-1 pr-2" style="color:blue"><a href="logout.php" style="color:blue">logOut</a></b> 
        </div>
    </header>
 
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
                <a class="list-group-item list-group-item-action list_group_item_k" href="edit.php">
                  Edit Record
                </a>
                <li class="nav-item">
                <a class="list-group-item list-group-item-action list_group_item_k " href="delete.php">
                  Delete Record
                </a>
              </li>
            </ul>  
          </div>
        </nav>
        <hr />

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 tab-content" id="nav-tabContent">

          <div class="" id="stats_set" role="tabpanel" aria-labelledby="stats">
            <h5>Stats</h5>
            <p class="desp">See total stats of everything.</p>
            <center>
              <div class="stats_body">
                <div id="stats_head">
                  <b>TOTAL USERS</b>
                </div>
                <!-- including file that calculate total users -->
                <?php include "includes/total_u.php"; ?>
                <div id="stats_num">
                  <h1><b id="total_worker_stats"></b><?php echo $users_stats_total ?></h1>
                </div>
              </div>
              
              <div class="row mt-3">
                <div class="col-md-4 col-lg-4 col-xl-4">
                  <div class="stats_body">
                    <div id="stats_head">
                      <b>TOTAL ADMINS</b>
                    </div>
                    <div id="stats_num">
                      <h4><b id="seo_manager_total">2</b></h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4">
                  <div class="stats_body">
                    <div id="stats_head">
                      <b>TOTAL RECORDS</b>
                    </div>
                    <?php include "includes/total_r.php"; ?>
                    <div id="stats_num">
                      <h4><b id="user_moderators_total"><?php echo  $records_stats_total ?></b></h4>
                    </div>
                  </div>
                </div>
           
                
                <div class="col-md-4 col-lg-4 col-xl-4">
                  <div class="stats_body">
                    <div id="stats_head">
                      <b>RECORDED EDITS</b>
                    </div>
                    <div id="stats_num">
                      <h4><b id="network_stats_total">0</b></h4>
                    </div>
                  </div>
                </div>
              </div>

              
              </div>
            </center>

        </main>
      </div>
    </div>
    <script src="scripts/jquery.min.js"></script>
  </body>
</html>