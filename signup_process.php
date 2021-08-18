<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['conf_password'])) {

	function clean_input($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = clean_input($_POST['username']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);
	$conf_password = clean_input($_POST['conf_password']);
	
	$user_data = 'username='. $username. '&email='. $email;


	if (empty($username)) {
		header("Location: signup.php?error=Please enter your username&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Please enter your password.&$user_data");
	    exit();
	}
	else if(strlen($password) < 7 || strlen($password) > 10){
		header("Location: signup.php?error=The password must have 7-10 characters."); 
	}
	else if(empty($conf_password)){
        header("Location: signup.php?error=Please confirm your password.&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: signup.php?error=Please enter your email.&$user_data");
	    exit();
	}

	else if($password !== $conf_password){
        header("Location: signup.php?error=The two passwords don't match.&$user_data");
	    exit();
	}

	else{

		// hashing the password

	    $sql = "SELECT * FROM userinfo WHERE user_name = '$username'";
		$result = mysqli_query($conn, $sql);

		$sql3 = "SELECT * FROM userinfo WHERE user_email = '$email'"; 
		$result3 = mysqli_query($conn, $sql3);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is already taken.&$user_data");
	        exit();
		}
		else if (mysqli_num_rows($result3) > 0) {
			header("Location: signup.php?error=The email is already taken.&$user_data");
	        exit();
		}
		else{
           	$sql2 = "INSERT INTO userinfo(user_name, user_email, user_password) VALUES('$username', '$email', '$password')";
          	$result2 = mysqli_query($conn, $sql2);
           	if($result2){
           	 	header("Location: signup.php?success=You have successfully signed up. Please login.");
	         	exit();
			}
			else{
	           	header("Location: signup.php?error=An unknown error occurred.&$user_data");
		        exit();
           	}
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}