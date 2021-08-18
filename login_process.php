  
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function clean_input($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = clean_input($_POST['username']);
    $password = clean_input($_POST['password']);
    
	if (empty($username)) {
		header("Location: login.php?error=Please enter your username.");
	    exit();
    }
    else if(empty($password)){
        header("Location: login.php?error=Please enter your password.");
	    exit();
    }
    else{
		// hashing the password

		$sql = "SELECT * FROM userinfo WHERE user_name = '$username' AND user_password = '$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
            if ($row['user_name'] == $username && $row['user_password'] == $password) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['email'] = $row['user_email'];
            	$_SESSION['id'] = $row['user_id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: login.php?error=Invalid username or password.");
		        exit();
			}
		}else{
			header("Location: login.php?error=Invalid username or password.");
	        exit();
		}
	}

}else{
	header("Location: login.php");
	exit();
}