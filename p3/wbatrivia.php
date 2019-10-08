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


    <h2>WBA Trivia Question:</h2>
    <!-- Using GET default method -->
    <form method='GET' action='wbatriviaprocess.php'>
        <fieldset>
        <h2>Who is the founder of the Women’s Basketball Association (WBA)?</h2>
        <p>Select your answer:</p>
        <div>
          <input type='radio' value='Lightning Mitchell' id='Lightning Mitchell' name='founder' checked>
          <label for='Lightning Mitchell'> Lightning Mitchell</label>
        </div>
        <div>
        <input type='radio' value='Val Ackerman<' id='Val Ackerman<' name='founder'>
        <label for='Val Ackerman<'> Val Ackerman</label>
        </div>


       <!-- <label for='answer'>Your Answer:</label>
        <input type='text' name='answer' id='answer'> -->

        <button type='submit'>Submit Your Answer</button>
        </fieldset>
    </form>



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