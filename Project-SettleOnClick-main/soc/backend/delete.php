<?php 
	include('Bcode/conn.php');
	$id=$_GET['id'];
	$query = "DELETE FROM services WHERE id=$id";

	if (mysqli_query($conn, $query))
	{
		header("location:view_services.php");
	} else {
	    echo "Error deleting record: " . mysqli_error($conn);
	}

	mysqli_close($conn);




 ?>