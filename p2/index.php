<?php require 'index-controller.php';

// Randomly choose missed shot worth zero points or a made shot worth three points
// max and min values of 0 and 1
$winner = null;
$shots_value = ['3', '0'];
$player1 = $shots_value[rand(0,1)];
$player2 = $shots_value[rand(0,1)];

if ($player1 > $player2) {
    $winner = 'Player 1! Congrats Lynette, you are the MVP.  Robbie, you are Knocked Out!';
} elseif ($player1 < $player2) {
    $winner = 'Player 2! Congrats Robbie, you are the MVP.  Lynette, you are Knocked Out!';
} elseif 
    ($player1 == $player2) {
    $winner = 'Neither player, it is a tie. Play another round in Overtime.';
}
// The above PHP code works for game and overtime as needed

?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Trailblazers MVP Knockout 3-Pt Shooting Game.</title>
    <meta charset='utf-8'>

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
<h1>Knockout 3-Pt Shooting Game <br>
    Trailblazers MVP Version 1.16.15 beta</h1>
<!-- Minimum Viable Product/Most Valuable Player --> 
<img alt='WBCBL Trailblazers Basketball Player Logo' src='https://pbs.twimg.com/media/CBfUlbsVAAANjUG?format=jpg' class="center">
</header>

<h2>Mechanics</h2>
<p>
Player 1: Lynette Woodard and Player 2: Robbie Garcia both shoot a three pointer from the top of the key. Each player will either make their shot or miss their shot. A made shot is worth THREE points; a missed shot is worth ZERO points. The player with the least points is Knocked Out and the player with the most points Wins the game and is the MVP!  If the game ends in a tie, the game goes into overtime. If at the end of overtime the game is still tied, the game continues in overtime rounds until one player wins and is crowned MVP.</p>

<h2>Results</h2>
<ul>
    <li>Player 1, you have <?php echo $player1; ?> points.</li>
    <li>Player 2, you have <?php echo $player2; ?> points.</li>
    <li><strong>The winner is: </strong><?php echo $winner; ?>
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