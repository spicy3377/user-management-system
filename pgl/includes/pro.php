<?php


      // select users;
    $select_users = "SELECT * FROM users WHERE unique_id = ?";
    $stmt = mysqli_prepare($db_var, $select_users);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          // fetch results
          $user_id = $row["unique_id"];
          $user_name = $row["username"];
          $user_full_name = $row["fullname"];

    }
?>