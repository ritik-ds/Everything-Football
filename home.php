<!DOCTYPE HTML>
<html>

<head>
  <title>Home | Everything Football</title>
  <link rel="stylesheet" type="text/css" href="styling.css" />
  <link rel="stylesheet" type="text/css" href="table.css" />
<style>
.container {
  position: relative;
  width: 100%;
  padding-bottom: 100px;
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
.container:hover .image {
  opacity: 0.3;
}
.container:hover .middle {
  opacity: 1;
}
.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
</head>

<body>

  <?php
  include "header.php";
  ?>
  <div id="menubar">
    <ul id="menu">
      <li class="selected"><a href="home.php">HOME</a></li>
      <li><a href="topNews.php">TOP NEWS</a></li>
      <li><a href="leagueTable.php">LEAGUE TABLE</a></li>
      <li><a href="highlights.php">HIGHLIGHTS</a></li>
      <li><a href="feedback.php">FEEDBACK</a></li>
      <li><a href="myAccount.php">MY ACCOUNT</a></li>

    </ul>
  </div>
<div style="padding-left: 300px; padding-right: 300px; padding-bottom: 100px">
  <div style="border: solid;">
    <a href="topNews.php">
      <center><p class="pt">TOP NEWS</p></center>
    </a>
    <div style="padding-left: 100px; padding-right: 100px;">
    <div class="container">
      <a href="topNews.php">
        <img src="https://e2.365dm.com/20/11/1920x1080/skysports-diego-maradona-argentina_5160270.jpg?20201103193030" alt="Avatar" class="image">
        <div class="middle">
          <div class="text">Football Legend Diego Maradona Dies at the age of 60</div>
        </div>
      </a>
    </div>
    <div class="container">
      <a href="topNews.php">
        <img src="https://cdn.cnn.com/cnnnext/dam/assets/190914192458-neymar-psg-strasbourg-exlarge-169.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <div class="text">A love-hate relationship</div>
        </div>
      </a>
    </div>
    </div>
  </div>
  <br><br>
    <div style="border: solid;">
        <center>
          <a href="leagueTable.php">
          <p class="pt">LEAGUE TABLE</p></a>
          <a href="leagueTable.php">
            <table class="table">
                <thead>
                    <td>Pos.</td>
                    <td class="name">CLUBS</td>
                    <td>P</td>
                    <td>W</td>
                    <td>D</td>
                    <td>L</td>
                    <td>GD</td>
                    <td>POINTS</td>
                </thead>
                <tbody>
                    <tr class="top">
                        <td>1</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561260926/1200px-Manchester_City_FC_badge.svg.png">&nbsp;&nbsp; MANCHESTER CITY</td>
                        <td>7</td>
                        <td>6</td>
                        <td>1</td>
                        <td>0</td>
                        <td>+18</td>
                        <td>19</td>
                    </tr>
                    <tr class="top">
                        <td>2</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561260950/1200px-Liverpool_FC.svg.png">&nbsp;&nbsp; LIVERPOOL</td>
                        <td>7</td>
                        <td>6</td>
                        <td>1</td>
                        <td>0</td>
                        <td>+12</td>
                        <td>19</td>
                    </tr>
                    <tr class="top">
                        <td>3</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561260970/Chelsea-logo.png">&nbsp;&nbsp; CHELSEA</td>
                        <td>7</td>
                        <td>5</td>
                        <td>2</td>
                        <td>0</td>
                        <td>+10</td>
                        <td>17</td>
                    </tr>
                    <tr class="top">
                        <td>4</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561260991/1200px-Tottenham_Hotspur.svg.png">&nbsp;&nbsp; TOTTENHHAM HOTSPUR</td>
                        <td>7</td>
                        <td>5</td>
                        <td>0</td>
                        <td>2</td>
                        <td>+7</td>
                        <td>15</td>
                    </tr>
                </tbody>
            </table>
            </a>
        </center>
      </div>

  <br><br>
  <div style="border: solid;">
    <a href="highlights.php">
      <center><p class="pt">HIGHLIGHTS</p></center>
    </a>
    <div style="padding-left: 100px; padding-right: 100px;">  
      <center>
        <iframe width="700" height="400" src="https://www.youtube.com/embed/0SIbpeclTok" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <a href="highlights.php"><h2>Latest Highlights</h2></a>
      </center>
      
    </div>
  </div>
</div>

  <?php
  include "footer.php";
  ?>

</body>
</html>
