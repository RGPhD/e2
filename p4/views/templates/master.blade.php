<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<h1>WBA Fantasy Basketball <br> Museum Induction Version 2.22.2020 beta</h1>
      <img alt='WBA Womens Basketball Association Logo' title='WBA Womens Basketball Association Logo' src='https://www.wbathevision.com/VISION/wp-content/uploads/WBA.png' class="center">

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>