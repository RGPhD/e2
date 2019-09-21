<?php require 'index-controller.php';

# Define 2 different variables, which will
# Each represent how much a made or missed shot is worth
$make_value = 3;
$miss_value = 0;

# Define player1 variable, which will each
# Represent how many shots are make and missed
$player1 = $make_value;
$player2 = $miss_value;

# Add up how many points Player has
# Automatic simulation of Player 1 missing the shot for now
$totalPlayer1 = ($miss_value);

# Add up how many points Player 2 has
# Automatic simulation of Player 2 making the shot for now
$totalPlayer2 = ($make_value);

?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Trailblazers Knockout 3-Pt Shooting Game.</title>
    <meta charset='utf-8'>

<!-- Create external CSS file? -->
<style>

      h1 {
        color: blue;
        text-align: center;
        border-bottom: thick solid orange;
      }

      h2 {
        color: blue;
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
        border-top: thick solid orange;
      }

    </style>

</head>

<body>

<header>
<h1>Trailblazers Knockout 3-Pt Shooting Game</h1>
<img alt='WBCBL Trailblazers Basketball Player Logo' src='https://pbs.twimg.com/media/CBfUlbsVAAANjUG?format=jpg' class="center">
</header>

<h2>Mechanics</h2>
<p>The "plain English" notes/plan for my game. (Starting code with one player then will add player 2).<br>
Player 1: Woodard and Player 2: Garcia both shoot a three pointer and either make it or miss it.<br>
A make is worth 3 points; A miss is worth 0 points. 
The player with the most points wins and is the MVP!</p>

<h2>Results</h2>
    <p>
        Player 1, you have <?php echo $totalPlayer1; ?> points and you are not the MVP Winner this time.
<br>
        Player 2, you have <?php echo $totalPlayer2; ?> points and you are the MVP Winner!
    </p>
<br>
<footer>
<p>Thanks for Playing the Trailblazers Knockout 3-Pt Shooting Game!</p>
</footer>
</body>
</html>