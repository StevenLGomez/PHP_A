<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "developer");
    define("DB_PASS", "holstein");
    define("DB_NAME", "widget_corp");

    // 1. Create a database connection
    //$dbhost = "localhost";
    //$dbuser = "developer";
    //$dbpass = "holstein";
    //$dbname = "widget_corp";
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    // Test for connection error
    if (mysqli_connect_errno())
    {
        die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>

