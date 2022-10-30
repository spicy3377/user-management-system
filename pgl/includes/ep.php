<?php

 $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // validation
    if (empty(trim($_POST["fulln"]))) {
        echo '<font color="#dc3545">fullname is empty</font>';
    
     } else {
        $edit = $_POST["fulln"];
       
    }

//edit query
$query = "UPDATE users SET `fullname` = ? WHERE unique_id = ?";
                  $stmt = mysqli_prepare($db_var, $query);
                  mysqli_stmt_bind_param($stmt, "si", $edit, $id);
                  mysqli_stmt_execute($stmt);

                  $msg = '<center><font color="green">Your Fullname has been edited succesfully</b></center></font>';
}
?>