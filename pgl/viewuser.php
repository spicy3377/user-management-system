<?php
// start session
session_start();

// database connection file
include "db/connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin -View all records</title>
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
                            <a class="list-group-item list-group-item-action list_group_item_k "  href="#stats_set">
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
                <div id="users_set" role="tabpanel" aria-labelledby="users">
                    <h5>Users</h5>
                    <p class="desp">Manage users account.</p>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="stats_body">
                                <div id="stats_head">
                                    <b>LIST OF USERS</b>
                                </div>
                                <div id="last_new_users" class="mt-1 p-1">
                                    <br>

                                    <?php
                              include "includes/view.php";
                                    ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="stats_body">
                                <div id="stats_head">
                                    <b>QUICK SEARCH</b>
                                </div>
                                <div class="form-group p-1">
                                    <div class="desp">Search any user to see data.</div>
                                    <input type="text" class="form-control clear_txt" name="quick_user_search" id="quick_user_s" placeholder="Search" autocomplete="off">
                                    <div id="quick_user_s_result" class="search_overflow p-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <script src="scripts/jquery.min.js"></script>
</body>

</html>