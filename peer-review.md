## P3 Peer Review

+ Reviewer's name: Robelyn Garcia
+ Reviewee's name: Shais Khan
+ URL to reviewee's Github repo: *<https://github.com/sethkhan/e2>*
+ URL to reviewee's p3 game: *<http://p3.shais.me>*


### Are you able to produce any errors or unexpected results?
No errors were produced while playing the game.  The only unexpected result was when the game ended in a tie and the ```echo $result``` message to the player was **“Its a tie! Play again”**, there was not a link provided to refresh and actually play again from the start of the game. Although a play again link is not required, Professor Susan Buck described how to do this in our Week 5 Part 4 video <https://youtu.be/qrZEzKGa5D0> at time 5:21.  I do see it is possible to make another selection from the drop down menu to play again; I like that option because the player can play the game as long as they wish.  As you mention in your README.md file ... “There is no need to refresh the page, You can select immediately to play again.”  However, if the player does refresh the browser, the same selection stays in the query string.

### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
The form design flow used in this project utilizes two files, index.php and index-controller.php.  This is the design flow we used for p2. The [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow) page did not have the exact form design flow. However it most resembles Design A, but with one view file and one controller file.  The game also redirects the player back to index.php file like Design C, yet it does not use sessions.

### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
No, echo statements are in the view file and the logic is in the controller file. Good job.

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?
No, the one comment in the ```index-controller.php``` file is relevant and in the correct location.  Moreover, you listed <https://www.geeksforgeeks.org/php-sleep-function> as an outside resource, yet I could not find the sleep function in your code or comments.

### List any/all built-in PHP methods used with a brief summary of what the method does.
1.  ```$_GET ``` - Get is a PHP superglobal built-in variable that is automatically created by PHP.  The form element in this game has a *method* attribute set to GET; this method returns a query string of rps and the player’s selection.
2.  ```array_rand() ``` - This inbuilt *function* picks one or more random keys/entries out of an array, and returns one or more than one key of the random entries. For this game the array_rand selects one of the three moves (Rock, Paper or Scissors) and returns it as the computer’s random key selection.  This is done by randomly choosing a key, 0, 1 or 2 and then extracting Rock, Paper or Scissors from the array.

### Are there any parts of the code that you found interesting or taught you something new?
I learned that you can use ```onchange="this.form.submit()"``` without JavaScript.

### Are there any parts of the code that you don't understand?
No, the code is well written and as a beginner I understand it. Nicely done! The code is more complex and longer than my own; this is helpful for my p4 planning.

### Are there any best practices discussed in course material that you feel were not addressed in the code?
The only thing I can see is the need for a simple grammar and spell check for your PHP code, HTML code, README.md file and comment (you have a couple of typos). In Video Week 7 Part 2 <https://youtu.be/PjDoxKfMW9E> time 27:42, Professor Buck mentions that our VS Code editor does not have a built-in spell checker.  She said we can add the extension, however it can get annoying because so many words in PHP code are not true English words.  Moving forward I am going to and I would suggest others check their code and comments carefully for grammar and spelling.

### Do you have any additional comments not covered in the above questions?
You have a small grammar error with the  ```echo $result``` message to the player **“Its a tie! Play again”**; *It’s* is the correct spelling of the contraction of the words it is, instead of *Its*.

Unrelated to code, I enjoyed learning that *“Roshambo”* has a [World Rock Paper Scissors Association](https://www.wrpsa.com).  I was unaware that there is a World Association let alone that there are Professional tournaments; this was very interesting to learn!