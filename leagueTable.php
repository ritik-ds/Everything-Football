<!DOCTYPE HTML>
<html>

<head>
  <title>LeagueTable</title>
  <link rel="stylesheet" type="text/css" href="table.css" />
</head>

<body>
  <?php
  include "header.php";
  ?>

  <div id="menubar">
    <ul id="menu">
      <li><a href="home.php">HOME</a></li>
      <li><a href="topNews.php">TOP NEWS</a></li>
      <li class="selected"><a href="leagueTable.php">LEAGUE TABLE</a></li>
      <li><a href="highlights.php">HIGHLIGHTS</a></li>
      <li><a href="feedback.php">FEEDBACK</a></li>
      <li><a href="myAccount.php">MY ACCOUNT</a></li>

    </ul>
  </div>

<!-- 
<div class="main1">
    <div class="main2 table-responsive"> -->
        <center>
          <p class="pt">LEAGUE TABLE</p>
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
                    <tr>
                        <td>5</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561261014/f1c7a000dc20ff2970a503b43ecad32a.png">&nbsp;&nbsp; ARSENAL</td>
                        <td>7</td>
                        <td>5</td>
                        <td>0</td>
                        <td>2</td>
                        <td>+5</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561261036/1200px-Watford.svg.png">&nbsp;&nbsp; WATFORD</td>
                        <td>7</td>
                        <td>4</td>
                        <td>1</td>
                        <td>2</td>
                        <td>+3</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561261060/AFCB_08_grande.jpg">&nbsp;&nbsp; BOURNEMOUTH</td>
                        <td>7</td>
                        <td>4</td>
                        <td>1</td>
                        <td>2</td>
                        <td>0</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561261086/220px-Leicester_City_crest.svg.png">&nbsp;&nbsp; LEICESTER CITY</td>
                        <td>7</td>
                        <td>4</td>
                        <td>0</td>
                        <td>3</td>
                        <td>+3</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="name"><img class="logo" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561261112/1200px-Wolverhampton_Wanderers.svg.png">&nbsp;&nbsp; WOLVERHAMPTON WANDERERS</td>
                        <td>7</td>
                        <td>3</td>
                        <td>3</td>
                        <td>1</td>
                        <td>+2</td>
                        <td>12</td>
                    </tr>
                </tbody>
            </table>
        </center>
<!--     </div>
</div> -->



  <?php
  include "footer.php";
  ?>
</body>
</html>
