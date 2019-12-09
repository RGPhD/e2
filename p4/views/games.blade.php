@extends('templates.master')

@section('title')
Game History
@endsection

@section('content')

<h2>Game History</h2>
    
<nav class="sitenav">
    <ul>
      <li><a href="http://p3.robelyngarcia.me">P3 Game</a></li>
      <li class="youarehere"><a href="http://p4.robelyngarcia.me">P4 Game</a></li>
      <li><a href="http://p3.robelyngarcia.me/wbatrivia.php">Game Trivia</a></li>
      <li><a href="https://github.com/RGPhD/e2" target="blank">Game Code</a></li>
    </ul>
  </nav>

  <a href='game'>View P4 Individual Games</a>

<ul>
  @foreach($games as $game)
 <li>{{ $game['winner'] }}</li>

  @endforeach
  </ul>

@endsection