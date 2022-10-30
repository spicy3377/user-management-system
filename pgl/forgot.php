

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>forgot password</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/cp.css" rel="stylesheet">

</head>

<body>
  <noscript>
    <div style="background-color:#871D1D;color:white;padding:5px;font-weight:bold;text-align:center;">Please enable javascript in your browser to access completely</div>
  </noscript>
  <header class="navbar sticky-top header_color p-0">
    <div class="header_t pl-2"><a href="home" class="pointer"><span class="icon icon-arrow-left"></span></a>&nbsp;&nbsp;User Management System</div>

  </header>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-xl-4"></div>
      <div class="col-lg-4 col-xl-4">
        <br><br><br><br><br>
        <div class="d-none d-lg-block d-xl-none d-xl-block card-body border">

          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" accept-charset="utf-8">

            <p><b>Enter your email to retrieve password</b></p>
            <div class="form-group>">
                 <input type="text" class="form-control" name="username" id="p_key" placeholder="example@domain.com" value="" autocomplete="off" required>
            </div>
         
            <hr />
            <div class="form-group">
              <button type="submit" class="btn btn-outline-secondary btn-block" name="acess_pass_key" id="acess_pass_key">
                Submit
              </button>
              <br>
              
          </form>
        </div>
        <div class="d-block d-sm-none d-none d-sm-block d-md-none d-md-block d-lg-none">
          <div class="d-flex justify-content-center"><b><span class="icon-block"></span> You need a larger device!</b></div>
        </div>
      </div>
      <div class="col-lg-4 col-xl-4"></div>
    </div>
  </div>


  <script src="scripts/jquery.min.js"></script>

</body>

</html>