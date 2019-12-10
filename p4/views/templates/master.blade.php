<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>
    <meta charset='utf-8'>
    <meta name="description" content="WBA Fantasy Basketball Game">
    <meta name="author" content="Robelyn Garcia">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- External CSS file providing Separation of Concerns (SoC). -->
    <link rel="stylesheet" href='http://p3.robelyngarcia.me/style.css'>
    <link rel='shortcut icon' href='/favicon.ico'>
    <link href='/css/app.css' rel='stylesheet'>
    
    @yield('head')

</head>
<body>

<h1>WBA Fantasy Basketball <br> Museum Induction Version 2.22.2020 beta</h1>
      <img alt='WBA Womens Basketball Association Logo' title='WBA Womens Basketball Association Logo' src='https://www.wbathevision.com/VISION/wp-content/uploads/WBA.png' class="center">

<main>
<nav class="sitenav">
    <ul>
      <li class="youarehere"><a href="http://p4.robelyngarcia.me">P4 Game</a></li>
      <li><a href="http://p3.robelyngarcia.me">P3 Game</a></li>
      <li><a href="http://p2.robelyngarcia.me" target="_blank" title="P2 opens in new tab">P2 Game</a></li>
      <li><a href="http://p3.robelyngarcia.me/wbatrivia.php">Game Trivia</a></li>
      <li><a href="https://github.com/RGPhD/e2" target="_blank" title="Opens in a new tab">Game Code</a></li>
    </ul>
  </nav>
@yield('content')
</main>

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

@yield('body')

</body>
</html>