<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sign Up | Everything Football</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    
<body>
    <form method="POST" action="signup_process.php">
    
        <div class="login-box">
            <h1>Sign up</h1>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
           
            <?php if(isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
                

            <?php if(isset($_GET['username'])) { ?>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $_GET['username']; ?>"><br>
                </div>
            <?php }else{ ?>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
            <?php } ?>
            

            <?php if(isset($_GET['email'])) { ?>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
                </div>
            <?php }else{ ?>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
            <?php }?>


            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
           
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="conf_password" placeholder="Confirm Password">
            </div>
        
            <input type="submit" class="btn" name="signup" value="Sign in">
            <a href="login.php" class="ca">Already have an account? Login here</a>    
        </div>
    </form>
</body>
</html>