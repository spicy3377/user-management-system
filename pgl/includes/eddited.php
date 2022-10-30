<?php

include "../db/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // validation
    if (empty(trim($_POST["edit"]))) {
        echo '<font color="#dc3545">Subject is empty</font>';
    
     } else {
        $edit = $_POST["edit"];
       
    }
		$post_key = $_GET['key']; // post id

//edit query
$query = "UPDATE subjects SET `subject` = ? WHERE post_id = ?";
                  $stmt = mysqli_prepare($db_var, $query);
                  mysqli_stmt_bind_param($stmt, "si", $edit, $post_key);
                  mysqli_stmt_execute($stmt);

                  header("location: ../edit.php?eddited");
               exit();
}
?>