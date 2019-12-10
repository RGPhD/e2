@extends('templates.master')

@section('title')
Individual Games - Game {{ $game['id'] }}
@endsection

@section('content')

<h2>Game {{$game['id']}} Individual Result:</h2>
  &rarr; <a href='/games'>P4 Game History</a>
  <ul>
<li> Player picked {{ $game['player'] }}. </li>
<li> Computer picked {{ $game['computer'] }}. </li>
@if ($game['winner'] == 1)
<li> Player Won!</li>
<li> View all of <a href='/games'>P4 Game Results</a>
@else ($game['winner'] == 2)
<li> Player did not win. </li>
<li> View all of <a href='/games'>P4 Game Results</a>
</li>
@endif
</ul>
<br>
<h2>The WBA is being inducted into the Black Archives of Mid-America</h2>
The WBA League, Players, Coaches and Management will be inducted into the <a href='http://www.blackarchives.org/' target='blank'>The Black Archives of Mid-America Museum</a> during Black History Month in Febuary, 2020. For tickets or more information contact Lightning Ned Mitchell at info@wbathevision.com and or Dr. Carma at 816-221-1600.
<br>
<br>
<br>
@endsection