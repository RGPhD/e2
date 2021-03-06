@extends('templates.master')

@section('title')
    WBA Fantasy Game
@endsection

@section('content')

    <h2>Game Instructions:</h2>
    <ul>
      <li>Choose your Championship Team.</li>
      <li>Pick between the Kansas Crusaders (93 Champs) or the Chicago Twisters (95 Champs).</li>
      <li>When you click PLAY the computer will randomly select the Championship team.</li>
      <li>Pick the right team and you Win!</li>
      <li>After you play, take the WBA Trivia Challenge.</li>
    </ul>  
    <form method='GET' action='/save-new-game'>
      <fieldset>
        <h2>Enter your Game Information Below:</h2>
        
        Pick your Women's Pro Basketball Association Championship Team!
        <div>
          <input type='radio' value='Chicago' id='Chicago' name='team'>
          <label for='Chicago'> Chicago Twisters</label>
        </div>
        <input type='radio' value='Kansas' id='Kansas' name='team'>
        <label for='Kansas'> Kansas Crusaders</label>
        <!-- I removed checked box on Kansas. -->
        <div>
          <button type='submit' title='Good Luck!'>Click to PLAY the Game</button>
        </div>
      </fieldset>
    </form>

@if($app->errorsExist())
<ul>
    @foreach($app->errors() as $error)
    <li class='or'>{{ $error }}</li>
    @endforeach
</ul>
  @endif

@if ($game)
    <h2>Your Game Results</h2> 
<ul>      
      <li>The Computer’s WBA Champion is: {{$game['computer']}}. </li>
      <li>You picked: {{$game['player']}}. </li>
      
      <li>
@if ($game['winner'] == 1)
          Congrats You Won!
          @else ($game['winner'] == 2)
          You did not win.
@endif
      </li>
      <li>View all <a href='/games'>Game History</a></li>  

      <li>Learn about all of the WBA Champions by reading the <a href="https://www.amazon.com/Vision-Untold-Basketball-Association-Updated/dp/1533194912" target="_blank" title="Click to visit the WBA Book Page on Amazon"> WBA Book</a> or seeing the <a href="https://www.wbathevision.com/the-vision-is-coming-to-kansas-city" target="_blank" title="Click to visit the WBA Vision Movie Page">WBA Movie</a>!</li>
     
  </ul>
    <div>
      <button class='refresh' value="Refresh Page" onClick="window.location.reload();">Click to Refresh Page and Play Again</button>
    </div>
@endif

    <p class='champion'>&rarr; <a href='/games'>View all P4 Game Results</a></p>

@endsection