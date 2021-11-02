<?php

	include('header.php');
	require_once('../model/usersModel.php');
	
	$id=$_GET['id'];
	$status = deleteUser($id);
	header('location: userlist.php');

?>