<?php
include("config.php");
include("jwt_helper.php");
session_start(); 

$auth = false;

// Get data
if(isset($_POST['token']) && 
	isset($_POST['FilterName'])){
		
	$token = $_POST['token'];
	$FilterName = $_POST['FilterName'];
	
	try {
		// Get email
		$key=SERVERKEY.date("m.d.y");
		$email = JWT::decode($token, $key);
		$auth = true;
		} catch (\Exception $e) {  //hide $key on error
		echo 'error';
		}			
		
	if ($auth){
		// DB connection open	
		$con = new mysqli(HOST, USERNAME, PWD, DB);
		if (mysqli_connect_errno()) {
			printf("<BR>Fatal Error: %s\n", mysqli_connect_error());
			exit();
		}
		$sql="SELECT * FROM filters WHERE FilterEmail='$email' and FilterName='$FilterName'";
		$result = mysqli_query($con,$sql);
		
//test		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$group_arr[] = $row;
			}
			$result->close();
			echo json_encode($group_arr);
		}
		else {
			echo "0 results";
		}		

		mysqli_close($con);
	}
}

else {
	echo "wrong post data";
}
		
session_destroy();
?>