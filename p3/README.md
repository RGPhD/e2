# Project 3
+ By: *Robelyn Garcia*
+ Production URL: <http://p3.robelyngarcia.me>

## Game planning
* Define a winner variable, this will be null at the beginning of the game.
* The player enters their name in the name input box.
     * The name the player enters will be a string output in the results.
* The player can also optionally enter their email in the email input box.
* The player randomly picks a team of their choice: Kansas or Chicago.
     * Create an array with these two values: Kansas and Chicago.
* A team is randomly selected by the computer when the player clicks the `play` button.
     * Use the rand function to randomly choose a key, 0 or 1.
     * Use that to extract Kansas or Chicago from the array.
* If the computer selects the same team as the Player chooses, the Player wins.
     * Compare the computer’s selection to the Player's selection, and if they are the same, set the results to **you won** with a congratulatory message.
     * Otherwise, set the results to **you lost** with a condolence message.
* Allow the Player to select the refresh button and play the game again.
     * Repeat the above steps as many times as the player plays the game.
* After the game is over, allow the Player to click and play the WBA Trivia Challenge.

## WBA Trivia Challenge extra game planning
* Define a correct variable by hard coding the answer to Lightning Mitchell.
* The Player answers the trivia question by selecting a `radio` button.
     * The Player can select Lightning Mitchell or Val Ackerman.
* The Player that answers the trivia question by selecting Lightning Mitchell is correct.
     * Set the results for an output message that the Player is correct.
* The Player that answers the trivia question by selecting Val Ackerman is incorrect.
     * Set the results for an output message that the Player is incorrect.
* Allow the Player to navigate to the game home via the nav menu to play the game again.
* Allow the Player to select the link provided in the results message to play the game again.

## Outside resources
+ Photo courtesy of The WBA and Lightning Ned Mitchell. Retrieved from <https://www.wbathevision.com/VISION/wp-content/uploads/WBA.png>. 

## Notes for instructor and graduate student peer reviewer
+ After I finished my p3 game, I added the extra WBA Trivia Challenge game.
+ I used my local production server and CodePen to test my HTML and CSS code
<https://codepen.io/DrRobelynGarcia/full/gOOYMmz>.
+ I used my local production server and JsFiddle to test my HTML and CSS code for the WBA Trivia Challenge <https://jsfiddle.net/RobelynGarcia/zfujpgkm>.
+ I included the email input in the form just to practice coding HTML forms. I did not require the Player to enter their email address. However, if the Player did enter their email address I echoed it to the page after the output of their name.
