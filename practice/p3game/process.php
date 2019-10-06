<?php
session_start();

$winner = null;

$name = $_GET['name'];

$champion = ['Chicago', 'Kansas'];
$team = $_GET['team'];
$play = $champion[rand(0, 1)];
if ($team == $play) {
    $winner = true;
} else {
    $winner = false;
}
$results = [
    'winner' => $winner,
    'play' => $play,
    'team' => $team,
    'name' => $name,
];

$_SESSION['results'] = $results;
header('Location: index.php');