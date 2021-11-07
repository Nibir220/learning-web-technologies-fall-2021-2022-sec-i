<?php
	require_once('../model/usersModel.php');

	if(isset($_POST['save'])){

		$name 	= $_POST['username'];
		$buyingPrice 		= $_POST['email'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				if($email !=""){

					$user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'type'=>'user'];
					$status = addUser($user);

					if($status){
						header('location: ../views/login.html');
					}else{
						echo "try again...";
					}

				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>