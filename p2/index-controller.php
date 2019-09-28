<?php  

// Randomly choose missed shot worth zero points or a made shot worth three points
// max and min values of 0 and 1
// The PHP code below works for game and overtime as needed

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