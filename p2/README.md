# Project 2 Basic PHP Application - Game simulator
+ By: *Robelyn Garcia*
+ Production URL: <https://hesweb.dev/e2/projects/1>

## Game planning
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


## Outside resources
+ There are a myriad of ways to play Knockout.  I have included a link to the output of a simple Google search of *Knockout Basketball Game* below:
<https://www.google.com/search?q=knockout+basketball+game>
+ Photo courtesy of Jr. NBA-WNBA and WBCBL. Retrieved from <https://twitter.com/WomensProHoops/status/1177920444466257922>. 

## Notes for instructor
+ I selected the *MVP Professional Player* version of Knockout where the players only shoot 3-pointers.
+ I used my local production server and Paiza Online PHP Editor to test my code https://paiza.io/projects/3PG2GLRQ6TyK4Pd_d2UCAg
+ I used my local production server and CodePen to test my HTML and CSS code
https://codepen.io/DrRobelynGarcia/pen/dybwOZL
