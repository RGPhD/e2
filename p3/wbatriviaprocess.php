<?php require 'wbatriviaprocess-controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>

  <head>

    <title>WBA Fantasy Basketball Overtime Trivia</title>
    <meta charset='utf-8'>
    <meta name="description" content="WBA Fantasy Trivia Basketball Game">
    <meta name="author" content="Robelyn Garcia">

    <!-- External CSS file providing Separation of Concerns (SoC). -->
    <link rel="stylesheet" href="wbatrivia.css">

  </head>

  <body>
    <header>
      <h1>WBA Fantasy Basketball <br> Championship Game Version 8.11.93 beta</h1>
      <!-- Minimum Viable Product for the Most Valuable Player -->
      <img alt='WBA Womens Basketball Association Logo' title='WBA Womens Basketball Association Logo' src='https://www.wbathevision.com/VISION/wp-content/uploads/WBA.png' class="center">
    </header>

    <nav class="sitenav">
    <ul>
      <li><a href="http://p3.robelyngarcia.me">Game Home</a></li>
      <li class="youarehere"><a href="http://p3.robelyngarcia.me/wbatrivia.php">Game Trivia</a></li>
      <li><a href="https://github.com/RGPhD/e2/tree/master/p3" target="blank">Game Code</a></li>
    </ul>
  </nav>

    <h2 class='overtime'>WBA Trivia Challenge</h2>

    <!-- Using GET default method -->
    <?php if ($correct) { ?>
        <h2>WBA Trivia Results:</h2>
    <ul>
      <li>The Founder of the WBA is Lightning Ned Mitchell.</li>
      <li class='feedback'>Congrats, you are correct! Learn all about the WBA Founder by listening to his <a href="https://www.amazon.com/Vision-Untold-Basketball-Association-Updated/dp/B07SF7YM2D" target="_blank" title="Click to visit the WBA Book Page on Amazon"> Audio Book</a> or seeing his <a href="https://www.wbathevision.com/the-vision-is-coming-to-kansas-city" target="_blank" title="Click to visit the WBA Vision Movie Page"> Film</a>!</li>
      </ul>
      <div>
    <h2><a class='or' title="Return Home and Play Again" href="http://p3.robelyngarcia.me">Click to Return Home and or Play Again</a></h2>
    </div>
    <h3>Thanks for Playing the WBA Fantasy Basketball Game!</h3>
    
    
      <?php } else { ?>
        <h2>WBA Trivia Results:</h2>
    <ul>
      <li>The Founder of the WBA is Lightning Ned Mitchell.</li>
      <li class='feedback'>You are incorrect. But you can learn all about the WBA Founder by listening to his <a href="https://www.amazon.com/Vision-Untold-Basketball-Association-Updated/dp/B07SF7YM2D" target="_blank" title="Click to visit the WBA Book Page on Amazon"> Audio Book</a> or seeing his <a href="https://www.wbathevision.com/the-vision-is-coming-to-kansas-city" target="_blank" title="Click to visit the WBA Vision Movie Page"> Film</a>!</li>
      </ul>
    <div>
    <h2><a class='or' title="Return Home and Play Again" href="http://p3.robelyngarcia.me">Click to Return Home and or Play Again</a></h2>
    </div>
    <h3>Thanks for Playing the WBA Fantasy Basketball Game!</h3>
    
      <?php } ?>

      <!-- Using a link to play again url since because I received error with link inside button. -->

    <br>
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