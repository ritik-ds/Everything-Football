<!DOCTYPE html>
<html>
<head>
	<title>LOGIN | Everything Football</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <form action="login_process.php" method="post">

        <div class='login-box'> 
                <h2>LOGIN</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Enter username">
                </div>
    
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter password">
                </div>
           
                <input type="submit" class="btn" value="Login">
                <a href="signup.php" class="ca">New user? Sign up here</a>
        </div>
     </form>
</body>
</html>
