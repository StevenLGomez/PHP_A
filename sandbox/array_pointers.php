<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Array Pointers</title>
    </head>
    <body>
        <?php
            $ages = array(4, 8, 15, 16, 23, 42);

            // current: current pointer value
            echo "1: " . current($ages) . "<br />";

            // next: moves pointer forward by one
            next($ages);
            echo "2: " . current($ages) . "<br />";

            next($ages);
            next($ages);
            echo "3: " . current($ages) . "<br />";

            // prev: moves pointer backwards by one
            prev($ages);
            echo "4: " . current($ages) . "<br />";

            //reset: resets pointer back to first item
            reset($ages);
            echo "5: " . current($ages) . "<br />";

            //end: move the pointer to the last item
            end($ages);
            echo "6: " . current($ages) . "<br />";

            // Move the pointer past the last element
            next($ages);
            echo "7: " . current($ages) . "<br />";

            echo "Using pointer in while loop <br />";
            // While loop that moves the array pointer similar to foreach

            reset($ages);
            while ($age = current($ages))
            {
                echo $age . ", ";
                next($ages);
            }

        ?>
    </body>
</html>
