<?php
	
	$response = array();
	include '../includes/Admin_Operations.php';

	$db = new AdminOperation();

	
	$result = $db->deletePerson($_POST['Email']);

	if($result==1)
	{
		$response['error']= false;
		$response['message'] = "Account Deleted Successfuly..";
	}
	else 
	{
		$response['error']= true;
		$response['message'] = "Some Error Occured While Deleting";
	}


echo json_encode($response);






