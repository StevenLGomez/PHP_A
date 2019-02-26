<?php 
    session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Sessions</title>
    </head>
    <body>
        Nice body!

        <?php
             echo "<br />";

             $_SESSION["first_name"] = "Kevin";
             $name = $_SESSION["first_name"];
             echo $name;

        ?>
    </body>
</html>
