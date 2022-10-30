<?php

include "../db/connection.php";

if (isset($_GET['key'])) {
	

		$post_key = $_GET['key']; // post id

			// delete Subject
			$delete = "DELETE FROM subjects WHERE post_id = ?";
			$stmt = mysqli_prepare($db_var, $delete);
			mysqli_stmt_bind_param($stmt, "i", $post_key);
			mysqli_stmt_execute($stmt);

        header("location: ../delete.php?deleted");
               exit();
}

?>

    