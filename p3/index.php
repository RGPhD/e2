<?php require 'index-controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>

  <head>

    <title>WBA Fantasy Basketball</title>
    <meta charset='utf-8'>
    <meta name="description" content="WBA Fantasy Basketball Game">
    <meta name="author" content="Robelyn Garcia">

    <!-- External CSS file providing Separation of Concerns (SoC). -->
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <header>
      <h1>WBA Fantasy Basketball <br> Championship Game Version 8.11.93 beta</h1>
      <img alt='WBA Womens Basketball Association Logo' title='WBA Womens Basketball Association Logo' src='https://www.wbathevision.com/VISION/wp-content/uploads/WBA.png' class="center">
    </header>

    <nav class="sitenav">
    <ul>
      <li class="youarehere"><a href="http://p3.robelyngarcia.me">P3 Game</a></li>
      <li><a href="http://p4.robelyngarcia.me">P4 Game</a></li>
      <li><a href="http://p3.robelyngarcia.me/wbatrivia.php">Game Trivia</a></li>
      <li><a href="https://github.com/RGPhD/e2" target="blank">Game Code</a></li>
    </ul>
  </nav>

    <h2>Game Instructions:</h2>
    <ul>
      <li>Choose your Championship Team.</li>
      <li>Pick between the Kansas Crusaders (93 Champs) or the Chicago Twisters (95 Champs).</li>
      <li>When you click PLAY the computer will randomly select the Championship team.</li>
      <li>Pick the right team and you Win!</li>
      <li>After you play, take the WBA Trivia Challenge.</li>
    </ul>  
    <form method='GET' action='process.php'>
      <fieldset>
        <legend>Enter your Information:</legend>
        <div>
          <label for='name'>Name</label>
          <input type='text' id='name' name='name' placeholder='name is required' autofocus> <!-- Using placeholder because it lets users click at the beginning of text box instead of value attribute. Although value does have darker and more visible text. -->
        </div>

        <div>
          <label for='email'>e-mail </label>
          <input type='email' id='email' name='email' placeholder='e-mail is optional'>
        </div>
        <br>
        <p>Pick your Championship Team:</p>
        <div>
          <input type='radio' value='Chicago' id='Chicago' name='team'>
          <label for='Chicago'> Chicago Twisters</label>
        </div>
        <input type='radio' value='Kansas' id='Kansas' name='team' checked>
        <label for='Kansas'> Kansas Crusaders</label>

        <div>
          <button type='submit' title='Good Luck!'>Click to Play the Game</button>
        </div>
      </fieldset>
    </form>

    <?php if ($showResults) { ?>
    <h2>Your Results: <?php echo $results['name']; ?> <?php echo $results['email']; ?></h2> 
 <!-- Name of Player and email output here after Results h2 unless Player does not enter this data, then just the Results h2 header will return. -->
<ul>      
      <li>The WBA Champion is:
        <?php echo $results['play']; ?>
      </li>
      <li>You picked:
        <?php echo $results['team']; ?>
      </li>
      <?php if ($results['winner']) { ?>
<li class='champion'>Congrats, you Won! Learn about all of the WBA Champions by reading the <a href="https://www.amazon.com/Vision-Untold-Basketball-Association-Updated/dp/1533194912" target="_blank" title="Click to visit the WBA Book Page on Amazon"> WBA Book</a> or seeing the <a href="https://www.wbathevision.com/the-vision-is-coming-to-kansas-city" target="_blank" title="Click to visit the WBA Vision Movie Page">WBA Movie</a>!</li>
      <?php } else { ?>
      <li class='runnerup'>You lost. But you can still learn about all of the WBA Champions by reading the <a href="https://www.amazon.com/Vision-Untold-Basketball-Association-Updated/dp/1533194912" target="_blank" title="Click to visit the WBA Book Page on Amazon"> WBA Book</a> or seeing the <a href="https://www.wbathevision.com/the-vision-is-coming-to-kansas-city" target="_blank" title="Click to visit the WBA Vision Movie Page">WBA Movie</a>!</li>
      <?php } ?>
    </ul>
    <div>
      <button class='refresh' value="Refresh Page" onClick="window.location.reload();">Click to Refresh Page and Play Again</button>
    </div>
    <!-- I can use window.location.reload() or a link to original file to refresh and play again.  I selected window.location.reload() so the button would be the same as the Click to Play button.
    And because a button can't be nested inside of a link and vice versa. That is why I choose a url below to link to the trivia challenge. -->
   
    <h2><a class='or' title="WBA Trivia Challenge" href="http://p3.robelyngarcia.me/wbatrivia.php">Or Click here to take the WBA Trivia Challenge!</a></h2>
  
    <h3>Thanks for Playing the WBA Fantasy Basketball Game!</h3>
  
    <?php } ?>

    <footer>
      <br>
      <strong><a href="https://www.facebook.com/womensbasketballassociation" target="_blank" title="Click to visit the Womens Basketball Association Facebook Page">The Women's Basketball Association Facebook Page
        </a></strong>
      <br>
      <br>
      <strong><a href="https://hesweb.dev/e2" target="_blank" title="Click to visit Harvard Extension School: Web Programming for Beginners with PHP">Harvard University Extension School: DGMD E-2 Web Programming with PHP
        </a></strong>
      <br>
    </footer>
    <br>
  </body>

</html>