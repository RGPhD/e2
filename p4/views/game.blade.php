@extends('templates.master')

@section('title')
Individual Games - Game {{ $game['id'] }}
@endsection

@section('content')

  <h2>Game {{$game['id']}} Individual Result:</h2>
  <ul>
<li> Player picked {{ $game['player'] }}. </li>
<li> Computer picked {{ $game['computer'] }}. </li>
@if ($game['winner'] == 1)
<li>         Player Won!
@else ($game['winner'] == 2)
         Player did not win.
@endif
</li>
</ul>

  <p>&rarr; <a href='/games'>View all of P4 Game History</a></p>


@endsection