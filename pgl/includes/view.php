<?php

      // select users;
      $select_users = "SELECT * FROM users ORDER BY id DESC LIMIT 10";
      $stmt = mysqli_prepare($db_var, $select_users);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          // fetch results
          $user_id = $row["unique_id"];
          $user_name = $row["username"];
          $user_full_name = $row["fullname"];



          echo "
        <div class='mb-2' id='s-w-body' style='height: 58px;'>
                    <div class='s_u_profile_photo float-left mr-2'>
                        <img src='img02.jpg' style='width:100%;'>
                    </div>
             <div>
                    <div><b>" . $user_full_name . "</b><a href='user_panel.php?id=" . $user_id . "'><span class='icon-settings'></span></a></div>
                    <div style='color:grey'>" . $user_name . "</div>
            </div>
        </div>";
      }

      // close statement
      mysqli_stmt_close($stmt);

      // close db connection
      mysqli_close($db_var);

?>