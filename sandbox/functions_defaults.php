<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Untitled</title>
    </head>
    <body>
        <?php
            function paint($room = "office", $color = "blue")
            {
                return "The color of the {$room} is {$color}. <br />";
            }

            // As with C++, they must be initialized in order
            echo paint();
            echo paint("bedroom");
            echo paint("basement", "purple");
            echo paint("basement", null);

        ?>
    </body>
</html>
