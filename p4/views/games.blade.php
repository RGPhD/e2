@extends('templates.master')

@section('title')
Game History
@endsection

@section('content')

<h2>Game History</h2>

View Individual Games Below:

<ul>
@foreach ($games as $game)
      <li><a href = "/game?id={{$game['id']}}">
      Game Result {{$game['id']}}</li></a>
@endforeach
</ul>

@endsection