<?php require 'index-controller.php';

# Define 2 different variables, which will
# Each represent how much a made or missed shot is worth
$make_value = 3;
$miss_value = 0;

# Define player1 variable, which will each
# represent how many shots are make and missed
$player1 = $make_value;
$player2 = $miss_value;

# Add up how many points player1 has
$totalPlayer1 = ($make_value) + ($miss_value);

# Add up how many points player2 has
$totalPlayer2 = ($make_value) + ($miss_value);

?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>MVP Basketball Knockout 3-Pt Shooting Game.</title>
    <meta charset='utf-8'>

</head>

<body>

<header>
<h1>MVP Basketball Knockout 3-Pt Shooting Game Rough Draft</h1>

<h2>Mechanics</h2>
<p>The "plain English" notes/plan for my game. (Starting with one player then will add player 2).
Player 1 and Player 2 shoot a three pointer and either make it or miss it.
A make is worth 3 points; A miss is worth 0 points. 
The player with the most points wins and is the MVP!</p>

    <img alt='MVP Basketball Player Logo' src='https://en.wikipedia.org/wiki/File:Robelyn-garcia.wba.kansas.jpg#/media/File:Robelyn-garcia.wba.kansas.jpg'>

<h2>Results</h2>
    <p>
        Player 1, you have $<?php echo $totalPlayer1; ?> and you are the MVP Winner!
<br>
        Player 2, you have $<?php echo $totalPlayer2; ?> and you are not the MVP Winner this time.
    </p>
</body>
</html>