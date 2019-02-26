<?php
    header("HTTP 1.1/ 404 Not Found");
    header("X-Powered-By: None of your business");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Headers</title>
    </head>
    <body>
        <?php
            // This won't work
            //header("HTTP 1.1/ 404 Not Found");

            echo "<pre>";
            print_r(headers_list());
            echo "</pre>";
        ?>
    </body>
</html>
