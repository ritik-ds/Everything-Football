<!DOCTYPE HTML>
<html>

<head>
  <title>Change Details</title>
  <link rel="stylesheet" type="text/css" href="styling.css" />
</head>

<body>
  <?php  
  include "header.php";
  ?>

  <div id="menubar">
    <ul id="menu">
      <li><a href="home.php">HOME</a></li>
      <li><a href="topNews.php">TOP NEWS</a></li>
      <li><a href="leagueTable.php">LEAGUE TABLE</a></li>
      <li><a href="highlights.php">HIGHLIGHTS</a></li>
      <li><a href="feedback.php">FEEDBACK</a></li>
      <li class="selected"><a href="myAccount.php">MY ACCOUNT</a></li>

    </ul>
  </div>
  
  <div style="padding-right: 530px; padding-left: 530px; padding-top: 90px; padding-bottom: 90px">
    <div style="border: solid;">
      <center>
        <h1>Change Password</h1>  
        <div class="form_settings">
          <?php 
      session_start(); 
      include "db_conn.php";

      if(isset($_POST['submit1'])){ 
          $oldPassword = $_POST['oldPassword']; 
          $newPassword = $_POST['newPassword']; 
          $newPassword2 = $_POST['newPassword2']; 


        if(empty($oldPassword) || empty($newPassword) || empty($newPassword2)){ 
          header("Location: changePassword.php?error=Please fill all the fields.");
          exit();
        }
        else if($newPassword !== $newPassword2){
          header("Location: changePassword.php?error= Passwords Not Matching");
          exit();

      }
      else{ 
        $sql = "SELECT * From userInfo WHERE user_name='{$_SESSION['user_name']}'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_array($result);
          if($row['user_password'] == $oldPassword){
            $sql2 = "UPDATE userInfo SET user_password = '$newPassword' WHERE user_password = '$oldPassword'";
            mysqli_query($conn, $sql2);
            header("Location: login.php?success=Password Changed Successfully. Please Login Again.");
            exit();

        }else{
          header("Location: changePassword.php?error= Please Enter Correct Password.");
          exit();
        }
      }
      }
      }else{
        header("Location: changePassword.php?error= Something Went Wrong. Please try again.");
        exit();

    }

    ?>
        </div>
      </center>
    </div>
  </div>

  <?php
  include "footer.php";
  ?>
</body>
</html>
