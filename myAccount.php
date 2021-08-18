<!DOCTYPE HTML>
<html>

<head>My Account</title>
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
  <center><h1>ACCOUNT DETAILS</h1></center>
  <div style="padding-right: 530px; padding-left: 530px; padding-bottom: 90px">
    <div style="border: solid;">
      <div style="padding: 50px; padding-left: 100px; text-align: left;">

      <?php
        session_start();

        echo "<h2><b>Username: </b>".$_SESSION['user_name']; 
        echo "<br><br><b>Email: </b>".$_SESSION['email']; 

      ?>
      </div>
    </div>
    <center>
      <a href="changePassword.php"><h2>CHANGE PASSWORD</h2></a>
    </center>
  </div>


  <?php
  include "footer.php";
  ?>
</body>
</html>
