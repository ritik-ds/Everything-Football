<!DOCTYPE HTML>
<html>

<head>
  <title>FEEDBACK</title>
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
      <li><a href="highlights.php">HIGHLIGHTS </a></li>
      <li class="selected"><a href="feedback.php">FEEDBACK</a></li>
      <li><a href="myAccount.php">MY ACCOUNT</a></li>
    </ul>
  </div>

<div style="padding-right: 500px; padding-left: 500px; padding-top: 90px; padding-bottom: 90px">
  <div style="border: solid;">
    <center>
      <h1>Your Feedback</h1>
    </center>
    <?php 
      session_start(); 
      include "db_conn.php";

      if(isset($_POST['submit'])){ 
          $content = $_POST['content']; 

        if(empty($content)){ 
            header("Location: feedback.php?error=Please enter some feedback.");
            exit();
        }
        else{ 
            $sql = "INSERT INTO feedback(user_id, user_name, user_feedback) VALUES('{$_SESSION['id']}', '{$_SESSION['user_name']}', '$content')";
            mysqli_query($conn, $sql);
        }
      }
    ?>
    <center>
      <h1>Thanks for submitting your feeback, <b><?php echo $_SESSION['user_name']?></b>.<br><br> Here's what we got from you:<b> <?php echo $content?> </b></h1>
    </center>
  </div>
</div>


  <?php
  include "footer.php";
  ?>
</body>
</html>
