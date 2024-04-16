<?php 


include ("backend/Bcode/conn.php");
	//Fetch Infomartion 

	if(isset($_POST['city']) && isset($_POST['city'])!=""  ) 
	{
		$city= $_POST['city'];
		$service= $_POST['service'];

		$query = "SELECT * FROM `services` WHERE `city`='$city' AND `Service`='$service'";
		
		if(!$result = mysqli_query($conn,$query)){
			exit(mysqli_error());

		}
		

		$response = array();
		if(mysqli_num_rows($result) > 0)
		{
			while ($row = mysqli_fetch_array($result))
			{
				$response[] =$row;
			}
		}
		else{
			$response['status']=200;
			$response['message']="Data not found";
		}


		echo json_encode($response);
	}
	else{
		$response['status']=200;
		$response['message']="Invalid Request";
	}

 ?>