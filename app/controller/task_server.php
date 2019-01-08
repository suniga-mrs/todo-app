<?php
	require_once "connection.php";

	$sql = "SELECT * FROM tasks";

	$result = mysqli_query($conn, $sql);

	$array_result = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($array_result, $row);
	}

	if (!empty($array_result)) {
		// print_r($array_result);
		echo json_encode(array_values($array_result));
	} else {
		echo json_encode("failed");
		// echo "failed";
	}

	mysqli_close($conn);
?>