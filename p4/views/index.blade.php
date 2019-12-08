@extends('templates.master')

@section('title')
    WBA p4 Game
@endsection

@section('content')
    
<nav class="sitenav">
    <ul>
      <li><a href="http://p3.robelyngarcia.me">P3 Game</a></li>
      <li><a href="http://p4.robelyngarcia.me">P4 Game</a></li>
      <li class="youarehere"><a href="http://p3.robelyngarcia.me/wbatrivia.php">Game Trivia</a></li>
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

    <a href="http://p4.robelyngarcia.me/games">P4 Game History</a>

@endsection