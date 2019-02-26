<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
    
        <title>Functions: Multiple Returns</title>
    </head>
    <body>
        <?php
            function add_subt($val1, $val2)
            {
                $add = $val1 + $val2;
                $subt = $val1 - $val2;
                return array($add, $subt);
            }

            // Use arrays to handle multiple return values
            $result_array = add_subt(10, 5);
            echo "Add: " . $result_array[0] . " Subtract: " . $result_array[1] . "<br />";

            // Using lists is a bit cleaner though
            list($add_result, $subt_result) = add_subt(20, 7);
            echo "Add: " . $add_result . " Subtract: " . $subt_result . "<br />";

        ?>
    </body>
</html>
