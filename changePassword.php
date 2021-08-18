<!DOCTYPE HTML>
<html>

<head>
  <title>Change Details</title>
  <link rel="stylesheet" type="text/css" href="styling.css"/>
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
        <div class="form_settings" style="padding-bottom: 30px">
          <form method="POST" action="changePassword_process.php">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <div class="textbox">
              <i class="fas fa-lock"></i>
              <input type="password" name="oldPassword" placeholder="Enter Old Password">
            </div>
            <br><br>

            <div class="textbox">
              <i class="fas fa-lock"></i>
              <input type="password" name="newPassword" placeholder="Enter New Password">
            </div>
            <br><br>

            <div class="textbox">
              <i class="fas fa-lock"></i>
              <input type="password" name="newPassword2" placeholder="Confirm New Password">
            </div>
            <br><br>
       
            <input type="submit" class="submit" name="submit1" value="Submit">
          </form>
        </div>
      </center>
    </div>
  </div>

  <?php
  include "footer.php";
  ?>
</body>
</html>
