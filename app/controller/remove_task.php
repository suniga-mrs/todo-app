<?php
	require_once "connection.php";
	

	if (isset($_POST['id'])) {
		$task_id = $_POST['id'];
		$sql = "DELETE FROM tasks WHERE id=$task_id";
		$result = mysqli_query($conn, $sql);

		if ($result === TRUE ) {
			// echo "deleted successfully";
			echo json_encode("deleted successfully");
		} else {
			$errorMsg = 'error: ' . $sql . "<br>" . mysqli_error($conn);
			echo json_encode($errorMsg);
		}
	} else {
		echo json_encode("failed");
	}



	// }

	mysqli_close($conn);


?>