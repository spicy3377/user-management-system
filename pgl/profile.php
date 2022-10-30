<?php
  // start session
  session_start();

  include "db/connection.php";

  $id = $_COOKIE["username"];

  include "includes/pro.php";

  include "includes/ep.php";



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
      <div class="header_t pl-2"><a href="home" class="pointer"><span class="icon icon-arrow-left"></span></a>&nbsp;&nbsp;Your Dashboard</div>
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
                  <b data-placement="bottom" data-toggle="tooltip" title="">Menu</b>
                  </h6>
               </li>
                        <li class="nav-item mb-2">
                            <a class="list-group-item list-group-item-action list_group_item_k"  href="profile.php" role="">
                               Profile
                            </a>
                            <a class="list-group-item list-group-item-action list_group_item_k"  href="home.php">
                              Statistics
                            </a>
                        </li>
               
            </ul>  
          </div>
        </nav>
        <hr />

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 tab-content" id="nav-tabContent">
          
        

       

        <div class="container">
    
      <div class="row">
        <div class="col-lg-4 col-xl-4"></div>
        <div class="col-lg-4 col-xl-4 pt-5">
          <div class="form-group">
            <center>
              <div class="profile_photo">
                <img src="img02.jpg" alt="<?php $s_user_name; ?>" title="<?php $s_user_name; ?>">
              </div>
              <p>
                <h4 data-placement="right" data-toggle="tooltip" title="Username"><?php echo $user_name ?></h4>
              </p>
            </center>
            <div>
              <div id="h_user_info_body1">
                <b>Full name:</b> <?php echo $user_full_name ?>
              </div>
              <div id="h_user_info_body2">
                <b>Date Joined:</b> 2022/10/27
              </div>
              <div id="h_user_info_body1">
                <b>Username:</b> <?php echo $user_name ?>
              </div>
              <div id="h_user_info_body2">
                <b>subject:</b> Mathematics
              </div>
              
              <div id="h_user_info_body1">
                <b>Bio:</b> Your bio goes here
              </div>
              <?php echo $msg ?>
              <hr />
              <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" accept-charset="utf-8">
               <center><b> Edit your Name</b></center>
              <input class="form-control" name="fulln" value="<?php echo $user_full_name ?>">
            </div>
          </div>
            <div class="form-group">
              <button type='submit'  class='btn btn-outline-secondary btn-block' name='uedit'>Save Edit</button>
            </div>
              </form>

              </div>
            </center>

        </main>
      </div>
    </div>
    <script src="scripts/jquery.min.js"></script>
  </body>
</html>