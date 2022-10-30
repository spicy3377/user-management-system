<?php

include "db/connection.php";

$msg = $error = $error1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // check if username is empty
  if (empty(trim($_POST['username']))) {
    $error = 'input_error';
  } else {
    $error = '';
    $username = $_POST["username"];
  }

  // check if password is empty
  if (empty(trim($_POST['password']))) {
    $error1 = 'input_error';
  } else {
    $error1 = '';
    $password = $_POST["password"];
  }

  // proceed if no error
  if (empty($error) && empty($error1)) {



    $query = "SELECT `unique_id` `username`, `password` FROM users WHERE username = ?";


    if ($stmt = mysqli_prepare($db_var, $query)) {

      // bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $username);

      // set parameters
      $param_username = $_POST["username"];

      // attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {

        // store result
        mysqli_stmt_store_result($stmt);

        // check if username exists, if yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {

          // bind result variables
          mysqli_stmt_bind_result($stmt, $username, $hashed_password);

          if (mysqli_stmt_fetch($stmt)) {

            if (password_verify($_POST["password"], $hashed_password)) {


              // set cookie for 1 month
              setcookie("username", $_SESSION['username'] = $username, time() + (60 * 60 * 24 * 30), "/");

              // direct user to home page
              header("location: dashboard.php");
              exit();
            } else {
              echo '<font color="#dc3545"><b>Your password is Incorrect</b></font>';
            }
          }
        } else {
          echo '<font color="#dc3545"><b>Incorrect Username</b></font>';
        }
      } else {
        echo '<font color="#dc3545">Oppsss, There was connection error</font>';
      }
    }

    // close statement
    mysqli_stmt_close($stmt);
  }

  // close db connection
  mysqli_close($db_var);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
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
          <?php echo $msg ?>
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" accept-charset="utf-8">

            <p><b>Username</b></p>
            <div class="form-group>">
                 <input type="text" class="form-control" name="username" id="p_key" placeholder="Please enter your username" value="" autocomplete="off" required>
            </div>
            <hr />
            <p><b>Password</b></p>
            <div class="form-group>">
                 <input type="password" class="form-control" name="password" id="p_key" placeholder="Please enter your password" value="" autocomplete="off" required>
            </div>
            <hr />
            <div class="form-group">
              <button type="submit" class="btn btn-outline-secondary btn-block" name="acess_pass_key" id="acess_pass_key">
                Login
              </button>
              <br>
              <small style="font-size:15px;margin-bottom:20px">Dont have an account.?</small> <a href="signup.php">SIGNUP</a>
              <div style="font-size:15px;margin-bottom:10px"></div>
              <center><a href="forgot.php">Forgot Password</a></center>
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


  <script src="scripts/jquery.min.js"></script>

</body>

</html>