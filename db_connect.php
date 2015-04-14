<?php
    $db_name = "mh4u_app";
    $un = "root"; //may need root with blank password, depending on setup; real server will be set up with actual username and password; mysql wants "", mysqli wants "root"; refer to mysql.user table
    $pw = "";
    $host="localhost";
    $mysqli = new mysqli($host, $un, $pw, $db_name) or die (mysqli_error($mysqli));
?>
