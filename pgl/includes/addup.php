<?php

$error = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// validation
if (empty(trim($_POST["subject"]))) {
    $error = '<font color="#dc3545">Subject is empty</font>';

 } else {
    $subject = $_POST["subject"];
   
}

$post_id = time();

$insert = "INSERT INTO subjects (`post_id`, `subject`) VALUES(?, ?)";
        $stmt = mysqli_prepare($db_var, $insert);
        mysqli_stmt_bind_param($stmt, "is", $post_id,  $subject);
        mysqli_stmt_execute($stmt);

       $msg = '<font color="green"><center><b>Subject was succesfully added</b></center></font>';
}
?>