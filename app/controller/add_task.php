<?php
	
	require_once "./connection.php";



	if (isset($_POST['taskname'])) {
		if (empty($_POST['taskname'])) {
			echo "error";

		}else{
			$newtask = $_POST['taskname'];
			$sql = "INSERT INTO tasks(name) VALUES ('$newtask')";
			$result = mysqli_query($conn, $sql);

			if ($result === TRUE) {
				echo "Task added succesfully!";
				// header('location: ../../index.php');

			} else {
				echo "Error " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

		}


	}	


?>