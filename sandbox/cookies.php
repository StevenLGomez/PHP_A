<?php
    // REMEMBER: Setting cookies must be before *any* HTML output
    //           unless output buffering is turned on.
    $name = "test";
    $value = "hello";
    $expire = time() + (60*60*24*7); // Add seconds

    //setcookie($name, $value, $expire);

    // Methods for unsetting the cookie
    //setcookie($name);
    //setcookie($name, null, $expire);

    // Kevin's recommendation for unsetting:
    //setcookie($name, $value, time() - 7200);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Cookies</title>
    </head>
    <body>
        Nice body!
        <br />
        <br />
        <?php
             //print_r($_COOKIE);

             $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
             echo $test;
        ?>

    </body>
</html>
