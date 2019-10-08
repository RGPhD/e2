<?php
/* My PHP Controller File */
/* Design C for initial game; Design A for Trivia Challenge Game. */

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $showResults = true;
    $_SESSION['results'] = null;

} else {
    $showResults = false;
}
/* Using boolean so I can style easier with CSS */