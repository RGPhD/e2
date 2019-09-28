<?php  

/* 
* Define a winner variable, this will be null at the beginning of the game.
* Player 1 shoots a three pointer and randomly either makes their shot or misses their shot.
     * A made shot is worth 3 points; a missed shot is worth 0 points.
     * Create an array with these two int values: 3 and 0.
     * Use the rand function to randomly choose a key, 0 or 1.
     * Use that to extract 3 or 0 from the array.
* Player 2 shoots a three pointer and randomly either makes their shot or misses their shot.
     * Repeat the above steps, this time for Player 2.
* The player with the most points Wins the game and is the MVP!
     * Set the winner to the player with the most points.
* The player with the least points is Knocked Out.
     * Set the player with the least points to receive an echo message that they are knocked out.
* If the game ends in a tie, the game goes into overtime.
     * Set the winner to neither player.
     * Repeat the above steps for Player 1 and Player 2.
     * After the overtime round, set the winner to the player with the most points.
* If at the end of overtime the game is still tied, the game continues in overtime rounds until one player wins.
     * Keep repeating the above steps for Player 1 and Player 2 until there is a winner.
     * Points are not cumulative.
*/

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