<?php

$error = $error3 = $error0 = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// username validation
if (empty(trim($_POST["username"]))) {

} elseif (strlen(preg_replace('/[^a-zA-Z]/m', '', $_POST["username"])) < 3) {
    $error = '<font color="#dc3545">Your username must have at least 3 letters</font>';

} elseif (strlen(preg_replace('/[^a-zA-Z]/m', '', $_POST["username"])) > 15) {
    $error = '<font color="#dc3545">Your username is too long</font>';

} elseif (!preg_match("/^[a-zA-Z0-9_.]{3,15}+$/ ", $_POST["username"])) {
    $error = '<font color="#dc3545">Your username must be in letters with either a number(0-9), underscore(_) or dot(.)</font>';


  } else {
    // prepare select statement
    $check_uname = "SELECT * FROM users WHERE username = ?";
    if ($stmt = mysqli_prepare($db_var, $check_uname)) {

        // bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // set parameters
        $param_username = $_POST["username"];

        // attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){

            /* store result */
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                  $error = '<font color="#dc3545"><b>'.$_POST["username"].'</b> is already taken</font>';
                 
            } else {
                $username = $_POST["username"];
               
            }
        } else {
            $error = '<font color="#dc3545"><b>Oops!</b> Something went wrong. Please try again later</font>';
           
        }
    }

    // close statement
    mysqli_stmt_close($stmt);
}

// full name validation
if (empty(trim($_POST["fullname"]))) {

} elseif (strlen(preg_replace('/[^a-zA-Z]/m', '', $_POST["fullname"])) < 3) {
    $error0 = '<font color="#dc3545">Your full name must be at least 3 letters</font>';

} elseif (strlen(preg_replace('/[^a-zA-Z]/m', '', $_POST["fullname"])) > 30) {
    $error0 = '<font color="#dc3545">Your full name is too long</font>';

} elseif (!preg_match("/^[a-zA-Z\s]{3,30}+$/ ", $_POST["fullname"])) {
    $error0 = '<font color="#dc3545">Your full name must be in letters with either a space</font>';

} else {
    $full_name = ucwords($_POST['fullname']);

}


// password validation
if (empty($_POST['password'])) {
    $error3 = '<font color="#dc3545">Empty</font>';
} elseif (strlen($_POST['password']) < 6) {
    $error3 = '<font color="#dc3545">Password must be at least 6 characters</font>';

} elseif (strlen($_POST['password']) > 150) {
    $error3 = '<font color="#dc3545">Your password is to long</font>';

} else {
    $password = $_POST['password'];

}


// check errors before inserting into database
if (empty($error) && empty($error0) && empty($error3)) {

    // PREPARE INSERT STATEMENT

	$insert = "INSERT INTO users(`unique_id`, `fullname`, `username`, `password`) VALUES(?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($db_var, $insert)) {

        // SET PARAMETERS
        $idd = rand();
        $param_full_name = $full_name; // user's full name
        $param_username = $username; // user's name
        $param_password = password_hash($password, PASSWORD_DEFAULT); // creates a password hash


        $insert = "INSERT INTO users(`unique_id`, `fullname`, `username`, `password`) VALUES(?, ?, ?, ?)";
        $stmt = mysqli_prepare($db_var, $insert);
        mysqli_stmt_bind_param($stmt, "isss", $idd, $param_full_name, $param_username, $param_password);
        mysqli_stmt_execute($stmt);


        $msg = '<font color="green"><center><b>Registration was Succesfull</b></center></font>';
    } 
}

}

?>