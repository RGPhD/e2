<?php require 'index-controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>

<head>

  <title>Trailblazers MVP Knockout 3-Pt Shooting Game.</title>
  <meta charset='utf-8'>
  <meta name="description" content="Basic PHP Basketball Game Simulator APP">
  <meta name="author" content="Robelyn Garcia">

  <!-- Create external CSS file? -->
<style>

      h1 {
        color: #003399;
        text-align: center;
        border-bottom: thick solid #FF6600;
      }

      h2 {
        color: #003399;
      }
    
    h3 {
        color: #003399;
        text-align: center;
        font-size: 125%;
      }

      p {
        display: inline-block;
        text-align: left;
      }

      img { 
	width: 25rem;
      }

      .center {
  	display: block;
  	margin-left: auto;
  	margin-right: auto;	
	}

      footer {
        margin: auto;
        text-align: center;
        font-size: 110%;
        font-weight: bold;
        border-top: thick solid #FF6600;
      }

    </style>

</head>

<body>

  <header>
    <h1>Knockout 3-Pt Shooting Game <br> Trailblazers MVP Version 1.16.15 beta</h1>
    <!-- Minimum Viable Product for the Most Valuable Player -->
    <img alt='WBCBL Trailblazers Basketball Player Logo' src='https://pbs.twimg.com/media/CBfUlbsVAAANjUG?format=jpg' class="center">
  </header>

  <h2>Mechanics</h2>
  <ul>
    <li>Player 1: Lynette Woodard and Player 2: Robbie Garcia both shoot a three pointer from the top of the key.</li>
    <li>Each player will either make their shot or miss their shot.</li>
    <li>A made shot is worth THREE points; a missed shot is worth ZERO points.</li>
    <li>The player with the least points is Knocked Out and the player with the most points Wins the game and is the MVP!</li>
    <li>If the game ends in a tie, the game goes into Overtime.</li>
    <li>If at the end of Overtime the game is still tied, the game continues in Overtime rounds until one player wins and is crowned MVP.</li>
    <li>Players points are noncumulative.</li>
  </ul>

  <h2>Results</h2>
  <ul>
    <li>Player 1, you have
      <?php echo $player1; ?> points.</li>
    <li>Player 2, you have
      <?php echo $player2; ?> points.</li>
    <li><strong>The winner is: </strong>
      <?php echo $winner; ?>
  </ul>

  <h3>Thanks for Playing the Trailblazers MVP Knockout 3-Pt Shooting Game!</h3>

  <footer>

    <p>MVP ~ The Minimum Viable Product for The Most Valuable Player</p>
    <br>
    <strong><a href="https://hesweb.dev/e2" target="_blank" title="Click to visit Harvard Extension School: Web Programming for Beginners with PHP">Harvard University Extension School: DGMD E-2 Web Programming with PHP
          </a></strong>
  </footer>
  <br>
</body>

</html>