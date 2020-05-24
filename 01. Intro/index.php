<?php

// Example 1
// $a = 110;
// $b = 110;

// if ($a > $b) {
//     echo "<h1> " . $a  . " > " . $b . "</h1>";
// } else if ($a < $b) {
//     echo "<h1> " . $a  . " < " . $b . "</h1>";
// } else {
//     echo "<h1> " . $a  . " = " . $b . "</h1>";
// }


// Example2

// $email = "";
// $password = "";

if (!empty($_GET)) {
    // print_r($_GET);
    $email = $_GET['email'];
    $password = $_GET['password'];
    if (isset($_GET['check'])) {
        $check = $_GET['check'];
    }

    // echo '<h2>' . $email . "</h2>";
    // echo '<h2>' . $password . "</h2>";
    // if (isset($check)) {
    //     echo '<h2>' . $check . "</h2>";
    // }
}



require_once "views/header.html";
require_once "views/main.html";
require_once "views/footer.html";
