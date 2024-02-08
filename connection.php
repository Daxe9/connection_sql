<?php
$conn = null;

function connect($dbname) {
    $_server = "localhost";
    $_username = "root";
    $_password = "";
    $GLOBALS["conn"] = new mysqli($_server, $_username, $_password, $dbname);
    if ($GLOBALS["conn"]->connect_error) {
        echo $GLOBALS["conn"]->connect_error;
        // header("Location: redirect.html");
    }
}
?>