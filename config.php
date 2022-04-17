<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'authdb');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASS, DB_NAME);

    if ($link === false) {
        die("ERROR: Could not connect." . mysqli_connect_error());
    }
    ?>