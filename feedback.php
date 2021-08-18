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
      <li><a href="highlights.php">HIGHLIGHTS</a></li>
      <li class="selected"><a href="feedback.php">FEEDBACK</a></li>
      <li><a href="myAccount.php">MY ACCOUNT</a></li>

    </ul>
  </div>

  <div style="padding-right: 530px; padding-left: 530px; padding-top: 90px; padding-bottom: 90px">
    <div style="border: solid;">
      <center>
        <h1>Feedback</h1>  
        <div class="form_settings">
          <form method="POST" action="feedback_process.php">
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
          
            <?php if(isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <span>Feedback:</span><textarea class="contact textarea" rows="8" cols="50" name="content"></textarea>
            <p style="padding-top: 15px"><input class="submit" type="submit" name="submit" value="submit" /></p>
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
