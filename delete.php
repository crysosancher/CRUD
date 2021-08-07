<?php
	require_once 'db/conn.php';
	if(!$_GET['id']){
		echo"error";
		
	}else{
		//get id value
		$id=$_GET['id'];
		//call Delete fun.
		$result=$crud->deleteAttendee($id);
		//redirect to list
		if($result){
			header("Location:viewrecords.php");
		}else{
			echo'';
		}
	}
	
?>