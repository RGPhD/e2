@extends('templates.master')

@section('title')
Individual Games - Game {{ $game['id'] }}
@endsection

@section('content')

<h2>Indivdual Game Result</h2>
    
<nav class="sitenav">
    <ul>
      <li><a href="http://p3.robelyngarcia.me">P3 Game</a></li>
      <li class="youarehere"><a href="http://p4.robelyngarcia.me">P4 Game</a></li>
      <li><a href="http://p3.robelyngarcia.me/wbatrivia.php">Game Trivia</a></li>
      <li><a href="https://github.com/RGPhD/e2" target="blank">Game Code</a></li>
    </ul>
  </nav>

  <h2>Game</h2>
<p> Player pick {{ $game['player'] }}. Computer pick {{ $game['computer'] }}.
@if ($game['winner'] == 1)
          Player Won!
          @else ($game['winner'] == 2)
         Player did not win.
        @endif
</p>

  <p><a href='/games'>View all of P4 Game History</a></p>


@endsection