<?php

    include "db/connection.php";
    include "includes/register.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User management system -Signup</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cp.css" rel="stylesheet">

  </head>
  <body>
    <noscript><div style="background-color:#871D1D;color:white;padding:5px;font-weight:bold;text-align:center;">Please enable javascript in your browser to access  completely</div></noscript>
    <header class="navbar sticky-top header_color p-0">
      <div class="header_t pl-2"><a href="<?php echo $path; ?>home" class="pointer"><span class="icon icon-arrow-left"></span></a>&nbsp;&nbsp;User Management System</div>
        
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xl-4"></div>
        <div class="col-lg-4 col-xl-4">
          	<br><br><br><br><br><br>
          	<div class="d-none d-lg-block d-xl-none d-xl-block card-body border">
              <?php echo $msg ?>
	          	<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" accept-charset="utf-8">
	              	<div class="form-group>">
                    <p><b>Your Fullname</b></p>
	                  	<input type="text" class="form-control" name="fullname" id="p_key" placeholder="What's your pass key?" value="" autocomplete="off" required>
	              	</div>
                  <hr />
                  <p><b>Your Username</b></p>
                  <div class="form-group>">
	                  	<input type="text" class="form-control" name="username" id="p_key" placeholder="What's your pass key?" value="" autocomplete="off" required>
	              	</div>
                  <hr />
                  <p><b>Your Password</b></p>
                  <div class="form-group>">
	                  	<input type="password" class="form-control" name="password" id="p_key" placeholder="What's your pass key?" value="" autocomplete="off" required>
	              	</div>
                  <hr />
	              	<div class="form-group">
		                <button type="submit"  class="btn btn-outline-secondary btn-block" name="acess_pass_key" id="acess_pass_key">
		                  	Register
		                </button>
                    <br>
                   <small style="font-size:15px" >Already have an Account.?</small> <a href="index.php">LOGIN</a>
	              	</div>
	           	</form>
	        </div>
	        <div class="d-block d-sm-none d-none d-sm-block d-md-none d-md-block d-lg-none">
	        	<div class="d-flex justify-content-center"><b><span class="icon-block"></span> You need a larger device!</b></div>
	        </div>
        </div>
        <div class="col-lg-4 col-xl-4"></div>
      </div>
    </div>
    <script src="assets/js/jquery/jquery.min.js"></script>
   
  </body>
</html>
