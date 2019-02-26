<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>While loops</title>
    </head>
    <body>
        <?php 
            $count = 0;
            while ($count <= 10)
            {
                if ($count == 5)
                {
                    echo "FIVE, ";
                }
                else
                {
                    echo $count . ", ";
                }
                $count++;   // Increments by 1
            }
            echo "<br />";
            echo "You're done, Count: {$count}";
                
        ?>

        <br />
        <?php
             $value = 0;
             while ($value <= 18)
             {
                 if ($value % 2 == 0)
                 {
                     echo "<h2> {$value}, </h2> ";
                 }
                 else
                 {
                     echo "{$value}, ";
                 }
                 $value++;
             }
             echo "<br />";
             echo "You're done, Value: {$value}";
        ?>
    </body>
</html>
