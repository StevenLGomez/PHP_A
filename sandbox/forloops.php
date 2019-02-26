<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>For Loops</title>
    </head>
    <body>
        <?php
            for ($count = 0; $count <= 10; $count++)
            {
                echo $count . ", ";
            }
        ?>

        <br />
        Finished with first loop
        <br />
        <br />
        <?php
             echo "A decrementing example...<br />";
             for ($count = 20; $count > 0; $count--)
             {
                 if ($count % 2 == 0)
                 {
                     echo "{$count} is even.<br />";
                 }
                 else
                 {
                     echo "{$count} is odd.<br />";
                 }
             }
        ?>
    </body>
</html>
